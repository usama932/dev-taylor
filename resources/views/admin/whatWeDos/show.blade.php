@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.whatWeDo.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.what-we-dos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.whatWeDo.fields.id') }}
                        </th>
                        <td>
                            {{ $whatWeDo->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.whatWeDo.fields.title') }}
                        </th>
                        <td>
                            {{ $whatWeDo->title }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.whatWeDo.fields.excerpt') }}
                        </th>
                        <td>
                            {{ $whatWeDo->excerpt }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.whatWeDo.fields.page_text') }}
                        </th>
                        <td>
                            {!! $whatWeDo->page_text !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.whatWeDo.fields.featured_image') }}
                        </th>
                        <td>
                            @if($whatWeDo->featured_image)
                                <a href="{{ $whatWeDo->featured_image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $whatWeDo->featured_image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.whatWeDo.fields.cta_button_text') }}
                        </th>
                        <td>
                            {{ $whatWeDo->cta_button_text }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.whatWeDo.fields.cta_url') }}
                        </th>
                        <td>
                            {{ $whatWeDo->cta_url }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.whatWeDo.fields.case_study') }}
                        </th>
                        <td>
                            {{ $whatWeDo->case_study->title ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.whatWeDo.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\WhatWeDo::STATUS_SELECT[$whatWeDo->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.whatWeDo.fields.slug') }}
                        </th>
                        <td>
                            {{ $whatWeDo->slug }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.what-we-dos.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection