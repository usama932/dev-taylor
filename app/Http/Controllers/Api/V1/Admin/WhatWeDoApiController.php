<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreWhatWeDoRequest;
use App\Http\Requests\UpdateWhatWeDoRequest;
use App\Http\Resources\Admin\WhatWeDoResource;
use App\Models\WhatWeDo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class WhatWeDoApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('what_we_do_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WhatWeDoResource(WhatWeDo::with(['case_study', 'categories', 'parent', 'tags'])->get());
    }

    public function store(StoreWhatWeDoRequest $request)
    {
        $whatWeDo = WhatWeDo::create($request->all());
        $whatWeDo->categories()->sync($request->input('categories', []));
        $whatWeDo->tags()->sync($request->input('tags', []));
        if ($request->input('featured_image', false)) {
            $whatWeDo->addMedia(storage_path('tmp/uploads/' . basename($request->input('featured_image'))))->toMediaCollection('featured_image');
        }

        return (new WhatWeDoResource($whatWeDo))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(WhatWeDo $whatWeDo)
    {
        abort_if(Gate::denies('what_we_do_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new WhatWeDoResource($whatWeDo->load(['case_study', 'categories', 'parent', 'tags']));
    }

    public function update(UpdateWhatWeDoRequest $request, WhatWeDo $whatWeDo)
    {
        $whatWeDo->update($request->all());
        $whatWeDo->categories()->sync($request->input('categories', []));
        $whatWeDo->tags()->sync($request->input('tags', []));
        if ($request->input('featured_image', false)) {
            if (!$whatWeDo->featured_image || $request->input('featured_image') !== $whatWeDo->featured_image->file_name) {
                if ($whatWeDo->featured_image) {
                    $whatWeDo->featured_image->delete();
                }
                $whatWeDo->addMedia(storage_path('tmp/uploads/' . basename($request->input('featured_image'))))->toMediaCollection('featured_image');
            }
        } elseif ($whatWeDo->featured_image) {
            $whatWeDo->featured_image->delete();
        }

        return (new WhatWeDoResource($whatWeDo))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(WhatWeDo $whatWeDo)
    {
        abort_if(Gate::denies('what_we_do_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $whatWeDo->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
