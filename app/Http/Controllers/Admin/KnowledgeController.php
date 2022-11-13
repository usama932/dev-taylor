<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyKnowledgeRequest;
use App\Http\Requests\StoreKnowledgeRequest;
use App\Http\Requests\UpdateKnowledgeRequest;
use App\Models\Knowledge;
use App\Models\KnowledgeCategory;
use App\Models\KnowledgeTag;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class KnowledgeController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('knowledge_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Knowledge::with(['category', 'tag'])->select(sprintf('%s.*', (new Knowledge())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'knowledge_show';
                $editGate = 'knowledge_edit';
                $deleteGate = 'knowledge_delete';
                $crudRoutePart = 'knowledges';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->addColumn('category_name', function ($row) {
                return $row->category ? $row->category->name : '';
            });

            $table->editColumn('category.slug', function ($row) {
                return $row->category ? (is_string($row->category) ? $row->category : $row->category->slug) : '';
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? Knowledge::STATUS_SELECT[$row->status] : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'category']);

            return $table->make(true);
        }

        $knowledge_categories = KnowledgeCategory::get();
        $knowledge_tags       = KnowledgeTag::get();

        return view('admin.knowledges.index', compact('knowledge_categories', 'knowledge_tags'));
    }

    public function create()
    {
        abort_if(Gate::denies('knowledge_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = KnowledgeCategory::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tags = KnowledgeTag::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.knowledges.create', compact('categories', 'tags'));
    }

    public function store(StoreKnowledgeRequest $request)
    {
        $knowledge = Knowledge::create($request->all());

        if ($request->input('featuredimage', false)) {
            $knowledge->addMedia(storage_path('tmp/uploads/' . basename($request->input('featuredimage'))))->toMediaCollection('featuredimage');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $knowledge->id]);
        }

        return redirect()->route('admin.knowledges.index');
    }

    public function edit(Knowledge $knowledge)
    {
        abort_if(Gate::denies('knowledge_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = KnowledgeCategory::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tags = KnowledgeTag::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $knowledge->load('category', 'tag');

        return view('admin.knowledges.edit', compact('categories', 'knowledge', 'tags'));
    }

    public function update(UpdateKnowledgeRequest $request, Knowledge $knowledge)
    {
        $knowledge->update($request->all());

        if ($request->input('featuredimage', false)) {
            if (!$knowledge->featuredimage || $request->input('featuredimage') !== $knowledge->featuredimage->file_name) {
                if ($knowledge->featuredimage) {
                    $knowledge->featuredimage->delete();
                }
                $knowledge->addMedia(storage_path('tmp/uploads/' . basename($request->input('featuredimage'))))->toMediaCollection('featuredimage');
            }
        } elseif ($knowledge->featuredimage) {
            $knowledge->featuredimage->delete();
        }

        return redirect()->route('admin.knowledges.index');
    }

    public function show(Knowledge $knowledge)
    {
        abort_if(Gate::denies('knowledge_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $knowledge->load('category', 'tag');

        return view('admin.knowledges.show', compact('knowledge'));
    }

    public function destroy(Knowledge $knowledge)
    {
        abort_if(Gate::denies('knowledge_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $knowledge->delete();

        return back();
    }

    public function massDestroy(MassDestroyKnowledgeRequest $request)
    {
        Knowledge::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('knowledge_create') && Gate::denies('knowledge_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Knowledge();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
