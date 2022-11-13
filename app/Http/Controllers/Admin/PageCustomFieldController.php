<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyPageCustomFieldRequest;
use App\Http\Requests\StorePageCustomFieldRequest;
use App\Http\Requests\UpdatePageCustomFieldRequest;
use App\Models\CaseStudy;
use App\Models\ContentPage;
use App\Models\Knowledge;
use App\Models\PageCustomField;
use App\Models\TeamMember;
use App\Models\WhatWeDo;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PageCustomFieldController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('page_custom_field_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pageCustomFields = PageCustomField::with(['page', 'what_we_do', 'case_study_custom', 'knowledge_custom', 'team_custom'])->get();

        return view('admin.pageCustomFields.index', compact('pageCustomFields'));
    }

    public function create()
    {
        abort_if(Gate::denies('page_custom_field_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pages = ContentPage::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $what_we_dos = WhatWeDo::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $case_study_customs = CaseStudy::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $knowledge_customs = Knowledge::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $team_customs = TeamMember::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.pageCustomFields.create', compact('case_study_customs', 'knowledge_customs', 'pages', 'team_customs', 'what_we_dos'));
    }

    public function store(StorePageCustomFieldRequest $request)
    {
        $pageCustomField = PageCustomField::create($request->all());

        return redirect()->route('admin.page-custom-fields.index');
    }

    public function edit(PageCustomField $pageCustomField)
    {
        abort_if(Gate::denies('page_custom_field_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pages = ContentPage::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $what_we_dos = WhatWeDo::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $case_study_customs = CaseStudy::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $knowledge_customs = Knowledge::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $team_customs = TeamMember::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $pageCustomField->load('page', 'what_we_do', 'case_study_custom', 'knowledge_custom', 'team_custom');

        return view('admin.pageCustomFields.edit', compact('case_study_customs', 'knowledge_customs', 'pageCustomField', 'pages', 'team_customs', 'what_we_dos'));
    }

    public function update(UpdatePageCustomFieldRequest $request, PageCustomField $pageCustomField)
    {
        $pageCustomField->update($request->all());

        return back();
    }

    public function show(PageCustomField $pageCustomField)
    {
        abort_if(Gate::denies('page_custom_field_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pageCustomField->load('page', 'what_we_do', 'case_study_custom', 'knowledge_custom', 'team_custom');

        return view('admin.pageCustomFields.show', compact('pageCustomField'));
    }

    public function destroy(PageCustomField $pageCustomField)
    {
        abort_if(Gate::denies('page_custom_field_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $pageCustomField->delete();

        return back();
    }

    public function massDestroy(MassDestroyPageCustomFieldRequest $request)
    {
        PageCustomField::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
