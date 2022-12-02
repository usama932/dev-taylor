@extends('layouts.admin')
@section('content')

<div class="main-card">
    <div class="header">
        {{ trans('global.show') }} {{ trans('cruds.caseStudy.title') }}
    </div>

    <div class="body">
       
            <div class="block pb-4">
                <a class="btn-md btn-gray" href="{{ route('admin.case-studies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="striped bordered show-table">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.caseStudy.fields.id') }}
                        </th>
                        <td>
                            {{ $caseStudy->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.caseStudy.fields.title') }}
                        </th>
                        <td>
                            {{ $caseStudy->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.caseStudy.fields.subtitle') }}
                        </th>
                        <td>
                            {{ $caseStudy->subtitle }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.caseStudy.fields.content') }}
                        </th>
                        <td>
                            {!! $caseStudy->content !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.caseStudy.fields.logo') }}
                        </th>
                        <td>
                            @if($caseStudy->logo)
                                <a href="{{ $caseStudy->logo->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $caseStudy->logo->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.caseStudy.fields.featuredtitle') }}
                        </th>
                        <td>
                            {{ $caseStudy->featuredtitle }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.caseStudy.fields.featuredimage') }}
                        </th>
                        <td>
                            @if($caseStudy->featuredimage)
                                <a href="{{ $caseStudy->featuredimage->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $caseStudy->featuredimage->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.caseStudy.fields.cta_button') }}
                        </th>
                        <td>
                            {{ $caseStudy->cta_button }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.caseStudy.fields.cst_link') }}
                        </th>
                        <td>
                            {{ $caseStudy->cst_link }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.caseStudy.fields.featured') }}
                        </th>
                        <td>
                            <input type="checkbox" disabled="disabled" {{ $caseStudy->featured ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.caseStudy.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\CaseStudy::STATUS_SELECT[$caseStudy->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.caseStudy.fields.slug') }}
                        </th>
                        <td>
                            {{ $caseStudy->slug }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.caseStudy.fields.orderby') }}
                        </th>
                        <td>
                            {{ $caseStudy->orderby }}
                        </td>
                    </tr>
                </tbody>
            </table>
             <div class="block pt-4">
                <a class="btn-md btn-gray" href="{{ route('admin.case-studies.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        
    </div>
</div>



@endsection