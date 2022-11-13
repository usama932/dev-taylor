<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreKnowledgeTagRequest;
use App\Http\Requests\UpdateKnowledgeTagRequest;
use App\Http\Resources\Admin\KnowledgeTagResource;
use App\Models\KnowledgeTag;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class KnowledgeTagApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('knowledge_tag_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new KnowledgeTagResource(KnowledgeTag::all());
    }

    public function store(StoreKnowledgeTagRequest $request)
    {
        $knowledgeTag = KnowledgeTag::create($request->all());

        return (new KnowledgeTagResource($knowledgeTag))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(KnowledgeTag $knowledgeTag)
    {
        abort_if(Gate::denies('knowledge_tag_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new KnowledgeTagResource($knowledgeTag);
    }

    public function update(UpdateKnowledgeTagRequest $request, KnowledgeTag $knowledgeTag)
    {
        $knowledgeTag->update($request->all());

        return (new KnowledgeTagResource($knowledgeTag))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(KnowledgeTag $knowledgeTag)
    {
        abort_if(Gate::denies('knowledge_tag_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $knowledgeTag->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
