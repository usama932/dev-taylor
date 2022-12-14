@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.slide.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.slides.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.slide.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $slide->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.slide.fields.title') }}
                                    </th>
                                    <td>
                                        {{ $slide->title }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.slide.fields.image') }}
                                    </th>
                                    <td>
                                        @if($slide->image)
                                            <a href="{{ $slide->image->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $slide->image->getUrl('thumb') }}">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.slide.fields.imagetitle') }}
                                    </th>
                                    <td>
                                        {{ $slide->imagetitle }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.slide.fields.description') }}
                                    </th>
                                    <td>
                                        {{ $slide->description }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.slide.fields.cta_button') }}
                                    </th>
                                    <td>
                                        {{ $slide->cta_button }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.slide.fields.url') }}
                                    </th>
                                    <td>
                                        {{ $slide->url }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.slide.fields.status') }}
                                    </th>
                                    <td>
                                        {{ App\Models\Slide::STATUS_SELECT[$slide->status] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.slide.fields.slider') }}
                                    </th>
                                    <td>
                                        {{ $slide->slider->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.slide.fields.parent') }}
                                    </th>
                                    <td>
                                        {{ $slide->parent->title ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.slide.fields.slidesid') }}
                                    </th>
                                    <td>
                                        {{ $slide->slidesid->title ?? '' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.slides.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection