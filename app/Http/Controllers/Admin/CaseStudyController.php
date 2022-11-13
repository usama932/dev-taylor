<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCaseStudyRequest;
use App\Http\Requests\StoreCaseStudyRequest;
use App\Http\Requests\UpdateCaseStudyRequest;
use App\Models\CaseStudy;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class CaseStudyController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('case_study_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = CaseStudy::query()->select(sprintf('%s.*', (new CaseStudy())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'case_study_show';
                $editGate = 'case_study_edit';
                $deleteGate = 'case_study_delete';
                $crudRoutePart = 'case-studies';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? CaseStudy::STATUS_SELECT[$row->status] : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.caseStudies.index');
    }

    public function create()
    {
        abort_if(Gate::denies('case_study_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.caseStudies.create');
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

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $caseStudy->id]);
        }

        return redirect()->route('admin.case-studies.index');
    }

    public function edit(CaseStudy $caseStudy)
    {
        abort_if(Gate::denies('case_study_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.caseStudies.edit', compact('caseStudy'));
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

        return redirect()->route('admin.case-studies.index');
    }

    public function show(CaseStudy $caseStudy)
    {
        abort_if(Gate::denies('case_study_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.caseStudies.show', compact('caseStudy'));
    }

    public function destroy(CaseStudy $caseStudy)
    {
        abort_if(Gate::denies('case_study_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $caseStudy->delete();

        return back();
    }

    public function massDestroy(MassDestroyCaseStudyRequest $request)
    {
        CaseStudy::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('case_study_create') && Gate::denies('case_study_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new CaseStudy();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
