<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreKnowledgeRequest;
use App\Http\Requests\UpdateKnowledgeRequest;
use App\Http\Resources\Admin\KnowledgeResource;
use App\Models\Knowledge;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class KnowledgeApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('knowledge_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new KnowledgeResource(Knowledge::with(['category', 'tag'])->get());
    }

    public function store(StoreKnowledgeRequest $request)
    {
        $knowledge = Knowledge::create($request->all());

        if ($request->input('featuredimage', false)) {
            $knowledge->addMedia(storage_path('tmp/uploads/' . basename($request->input('featuredimage'))))->toMediaCollection('featuredimage');
        }

        return (new KnowledgeResource($knowledge))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Knowledge $knowledge)
    {
        abort_if(Gate::denies('knowledge_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new KnowledgeResource($knowledge->load(['category', 'tag']));
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

        return (new KnowledgeResource($knowledge))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Knowledge $knowledge)
    {
        abort_if(Gate::denies('knowledge_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $knowledge->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
