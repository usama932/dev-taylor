<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreCaseStudyRequest;
use App\Http\Requests\UpdateCaseStudyRequest;
use App\Http\Resources\Admin\CaseStudyResource;
use App\Models\CaseStudy;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CaseStudyApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('case_study_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CaseStudyResource(CaseStudy::all());
    }

    public function store(StoreCaseStudyRequest $request)
    {
        $caseStudy = CaseStudy::create($request->all());

        if ($request->input('logo', false)) {
            $caseStudy->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
        }

        if ($request->input('featuredimage', false)) {
            $caseStudy->addMedia(storage_path('tmp/uploads/' . basename($request->input('featuredimage'))))->toMediaCollection('featuredimage');
        }

        return (new CaseStudyResource($caseStudy))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(CaseStudy $caseStudy)
    {
        abort_if(Gate::denies('case_study_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new CaseStudyResource($caseStudy);
    }

    public function update(UpdateCaseStudyRequest $request, CaseStudy $caseStudy)
    {
        $caseStudy->update($request->all());

        if ($request->input('logo', false)) {
            if (!$caseStudy->logo || $request->input('logo') !== $caseStudy->logo->file_name) {
                if ($caseStudy->logo) {
                    $caseStudy->logo->delete();
                }
                $caseStudy->addMedia(storage_path('tmp/uploads/' . basename($request->input('logo'))))->toMediaCollection('logo');
            }
        } elseif ($caseStudy->logo) {
            $caseStudy->logo->delete();
        }

        if ($request->input('featuredimage', false)) {
            if (!$caseStudy->featuredimage || $request->input('featuredimage') !== $caseStudy->featuredimage->file_name) {
                if ($caseStudy->featuredimage) {
                    $caseStudy->featuredimage->delete();
                }
                $caseStudy->addMedia(storage_path('tmp/uploads/' . basename($request->input('featuredimage'))))->toMediaCollection('featuredimage');
            }
        } elseif ($caseStudy->featuredimage) {
            $caseStudy->featuredimage->delete();
        }

        return (new CaseStudyResource($caseStudy))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(CaseStudy $caseStudy)
    {
        abort_if(Gate::denies('case_study_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $caseStudy->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
