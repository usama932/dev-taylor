<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyKnowledgeCategoryRequest;
use App\Http\Requests\StoreKnowledgeCategoryRequest;
use App\Http\Requests\UpdateKnowledgeCategoryRequest;
use App\Models\KnowledgeCategory;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class KnowledgeCategoryController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('knowledge_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = KnowledgeCategory::query()->select(sprintf('%s.*', (new KnowledgeCategory())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'knowledge_category_show';
                $editGate = 'knowledge_category_edit';
                $deleteGate = 'knowledge_category_delete';
                $crudRoutePart = 'knowledge-categories';

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
            $table->editColumn('slug', function ($row) {
                return $row->slug ? $row->slug : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.knowledgeCategories.index');
    }

    public function create()
    {
        abort_if(Gate::denies('knowledge_category_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.knowledgeCategories.create');
    }

    public function store(StoreKnowledgeCategoryRequest $request)
    {
        $knowledgeCategory = KnowledgeCategory::create($request->all());

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $knowledgeCategory->id]);
        }

        return redirect()->route('admin.knowledge-categories.index');
    }

    public function edit(KnowledgeCategory $knowledgeCategory)
    {
        abort_if(Gate::denies('knowledge_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.knowledgeCategories.edit', compact('knowledgeCategory'));
    }

    public function update(UpdateKnowledgeCategoryRequest $request, KnowledgeCategory $knowledgeCategory)
    {
        $knowledgeCategory->update($request->all());

        return redirect()->route('admin.knowledge-categories.index');
    }

    public function show(KnowledgeCategory $knowledgeCategory)
    {
        abort_if(Gate::denies('knowledge_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $knowledgeCategory->load('categoryKnowledges');

        return view('admin.knowledgeCategories.show', compact('knowledgeCategory'));
    }

    public function destroy(KnowledgeCategory $knowledgeCategory)
    {
        abort_if(Gate::denies('knowledge_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $knowledgeCategory->delete();

        return back();
    }

    public function massDestroy(MassDestroyKnowledgeCategoryRequest $request)
    {
        KnowledgeCategory::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('knowledge_category_create') && Gate::denies('knowledge_category_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new KnowledgeCategory();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
