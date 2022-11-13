@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.contentPage.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.content-pages.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contentPage.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $contentPage->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contentPage.fields.title') }}
                                    </th>
                                    <td>
                                        {{ $contentPage->title }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contentPage.fields.excerpt') }}
                                    </th>
                                    <td>
                                        {{ $contentPage->excerpt }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contentPage.fields.page_text') }}
                                    </th>
                                    <td>
                                        {!! $contentPage->page_text !!}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contentPage.fields.featured_image') }}
                                    </th>
                                    <td>
                                        @if($contentPage->featured_image)
                                            <a href="{{ $contentPage->featured_image->getUrl() }}" target="_blank" style="display: inline-block">
                                                <img src="{{ $contentPage->featured_image->getUrl('thumb') }}">
                                            </a>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contentPage.fields.status') }}
                                    </th>
                                    <td>
                                        {{ App\Models\ContentPage::STATUS_SELECT[$contentPage->status] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contentPage.fields.parent') }}
                                    </th>
                                    <td>
                                        {{ $contentPage->parent->title ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.contentPage.fields.slug') }}
                                    </th>
                                    <td>
                                        {{ $contentPage->slug }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.content-pages.index') }}">
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