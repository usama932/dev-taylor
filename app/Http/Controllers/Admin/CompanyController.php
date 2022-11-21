<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCompanyRequest;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use App\Models\ContentPage;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class CompanyController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('company_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $companies = Company::with(['company_info', 'media'])->get();

        return view('admin.companies.index', compact('companies'));
    }

    public function create()
    {
        abort_if(Gate::denies('company_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $company_infos = ContentPage::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.companies.create', compact('company_infos'));
    }

    public function store(StoreCompanyRequest $request)
    {
    $logo ="unset";
    if ($file = $request->file('companylogo')) {
        $file = $request->file('companylogo');
        $file_name = $file->getClientOriginalName();
        $file->move(public_path('/file'),$file_name);

        $logo = "/file/" . $file_name;

    }


        $company = Company::create([
        'company_name'=>$request->company_name,
        'company_email'=>$request->company_email,
        'linkedin'=>$request->company_email,
        'facebook'=>$request->company_email,
        'twitter'=>$request->twitter,
        'other'=>$request->other,
        'company_info_id'=>$request->company_info_id,
        'companies_logo'=>$logo
                ]);

        if ($request->input('companylogo', false)) {
            $fileName = time().'.'.$request->file->extension();

            $request->file->move(public_path('uploads'), $fileName);

            $company->addMedia(storage_path('tmp/uploads/' . basename($request->input('companylogo'))))->toMediaCollection('companylogo');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $company->id]);
        }

        return redirect()->route('admin.companies.index');
    }

    public function edit(Company $company)
    {
        abort_if(Gate::denies('company_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $company_infos = ContentPage::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $company->load('company_info');

        return view('admin.companies.edit', compact('company', 'company_infos'));
    }

    public function update(UpdateCompanyRequest $request, Company $company)
    {
        $company->update($request->all());

        if ($request->input('companylogo', false)) {
            if (!$company->companylogo || $request->input('companylogo') !== $company->companylogo->file_name) {
                if ($company->companylogo) {
                    $company->companylogo->delete();
                }
                $company->addMedia(storage_path('tmp/uploads/' . basename($request->input('companylogo'))))->toMediaCollection('companylogo');
            }
        } elseif ($company->companylogo) {
            $company->companylogo->delete();
        }

        return redirect()->route('admin.companies.index');
    }

    public function show(Company $company)
    {
        abort_if(Gate::denies('company_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $company->load('company_info');

        return view('admin.companies.show', compact('company'));
    }

    public function destroy(Company $company)
    {
        abort_if(Gate::denies('company_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $company->delete();

        return back();
    }

    public function massDestroy(MassDestroyCompanyRequest $request)
    {
        Company::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('company_create') && Gate::denies('company_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Company();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
