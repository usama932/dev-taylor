@extends('layouts.admin')
@section('content')



<div class="px-4 md:px-10 mx-auto w-full -m-24">
  <div class="flex flex-wrap mt-4">
    <div class="w-full mb-12 px-4">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
          <div class="flex flex-wrap items-center">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.slides.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
              <h3 class="font-semibold text-lg text-blueGray-700">
                {{ trans('global.show') }} {{ trans('cruds.slide.title') }}
              </h3>
            </div>
        </div>
        <div class="block w-full overflow-x-auto p-2">
          <!-- Projects table -->
              <table class="stripe hover bordered datatable">
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
        </div>
      </div>
    </div>
  </div>
</div>
{{-- <div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#parent_slides" role="tab" data-toggle="tab">
                {{ trans('cruds.slide.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="parent_slides">
            @includeIf('admin.slides.relationships.parentSlides', ['slides' => $slide->parentSlides])
        </div>
    </div>
</div> --}}

@endsection