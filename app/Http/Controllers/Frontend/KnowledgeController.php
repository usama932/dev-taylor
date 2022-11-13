<?php

namespace App\Http\Controllers\Frontend;

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

class KnowledgeController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('knowledge_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $knowledges = Knowledge::with(['category', 'tag', 'media'])->get();

        $knowledge_categories = KnowledgeCategory::get();

        $knowledge_tags = KnowledgeTag::get();

        return view('frontend.knowledges.index', compact('knowledge_categories', 'knowledge_tags', 'knowledges'));
    }

    public function create()
    {
        abort_if(Gate::denies('knowledge_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = KnowledgeCategory::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tags = KnowledgeTag::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.knowledges.create', compact('categories', 'tags'));
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

        return redirect()->route('frontend.knowledges.index');
    }

    public function edit(Knowledge $knowledge)
    {
        abort_if(Gate::denies('knowledge_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $categories = KnowledgeCategory::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $tags = KnowledgeTag::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $knowledge->load('category', 'tag');

        return view('frontend.knowledges.edit', compact('categories', 'knowledge', 'tags'));
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

        return redirect()->route('frontend.knowledges.index');
    }

    public function show(Knowledge $knowledge)
    {
        abort_if(Gate::denies('knowledge_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $knowledge->load('category', 'tag');

        return view('frontend.knowledges.show', compact('knowledge'));
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
