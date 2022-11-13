<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreKnowledgeCategoryRequest;
use App\Http\Requests\UpdateKnowledgeCategoryRequest;
use App\Http\Resources\Admin\KnowledgeCategoryResource;
use App\Models\KnowledgeCategory;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class KnowledgeCategoryApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('knowledge_category_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new KnowledgeCategoryResource(KnowledgeCategory::all());
    }

    public function store(StoreKnowledgeCategoryRequest $request)
    {
        $knowledgeCategory = KnowledgeCategory::create($request->all());

        return (new KnowledgeCategoryResource($knowledgeCategory))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(KnowledgeCategory $knowledgeCategory)
    {
        abort_if(Gate::denies('knowledge_category_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new KnowledgeCategoryResource($knowledgeCategory);
    }

    public function update(UpdateKnowledgeCategoryRequest $request, KnowledgeCategory $knowledgeCategory)
    {
        $knowledgeCategory->update($request->all());

        return (new KnowledgeCategoryResource($knowledgeCategory))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(KnowledgeCategory $knowledgeCategory)
    {
        abort_if(Gate::denies('knowledge_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $knowledgeCategory->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
