@extends('layouts.admin')
@section('content')

<div class="px-4 md:px-10 mx-auto w-full -m-24">
  <div class="flex flex-wrap mt-4">
    <div class="w-full mb-12 px-4">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
          <div class="flex flex-wrap items-center">
            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
              <h3 class="font-semibold text-lg text-blueGray-700">
               {{ trans('global.show') }} {{ trans('cruds.contentPage.title') }}
              </h3>
            </div>
            
            <div class="form-group"> 
              <a class="btn btn-indigo" href="{{ route('admin.content-pages.index') }}">
               {{ trans('global.back_to_list') }}
            </a>
            </div>
           
          </div>
        </div>
        <div class="block w-full overflow-x-auto p-2">
          <!-- Projects table -->
           <table class="striped bordered show-table">
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
                    @foreach ($contentPage->contactInfoLocations as $key => $custom )

                            <tr>
                                <td>Location::  {{ $custom->id}}</td>
                                <td>
                                    <address>
                                        <strong>{{ $custom->location_country}}</strong><br>
                                        <abbr title="Phone">P:</abbr> {{ $custom->location_phone}}
                                       <br>
                                        {{ $custom->location_address}}<br>
                                        <a href="">{{ $custom->location_addlink}}</a>
                                      </address>

                                </td>
                            </tr>

                    @endforeach
                    {{-- @foreach ($contentPage->slidesidSlides as $key => $slide )
                    <tr>
                        <td>Slides::  {{ $slide->id}}</td>
                        <td>
                            <address>
                                <abbr title="Phone">Title:</abbr><strong> {{ $slide->title}}</strong><br>
                                <abbr title="Phone">Status:</abbr>        {{ App\Models\Slide::STATUS_SELECT[$slide->status] ?? '' }}
                               <br>
                               <abbr title="Phone">Slider Name:</abbr>     {{ $slide->slider->name}}<br>

                            </address>

                        </td>
                    </tr>
                    @endforeach --}}
                    @if($contentPage->slidesidSlides->count() > 0)
                    <tr>
                        <td> <h5>Slides</h5></td>
                        <td></td>
                    </tr>
                       <tr>

                          <th>
                             Title
                          </th>
                          <th>
                             Status
                          </th>


                       </tr>
                       @foreach($contentPage->slidesidSlides as $key => $slide)
                       <tr>
                          <td>{{ $slide->title}}
                          </td>
                          <td>{{ App\Models\Slide::STATUS_SELECT[$slide->status] ?? '' }}&nbsp;({{ $slide->slider->name}})
                          </td>


                       </tr>
                       @endforeach

                    @endif
                </tbody>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>



{{-- <div class="px-4 md:px-10 mx-auto w-full -m-24">
  <div class="flex flex-wrap mt-4">
    <div class="w-full mb-12 px-4">
        <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
            <div class=" header">
                {{ trans('global.relatedData') }}
            </div>
            <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="#page_page_custom_fields" role="tab" data-toggle="tab">
                        {{ trans('cruds.pageCustomField.title') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contact_info_locations" role="tab" data-toggle="tab">
                        {{ trans('cruds.location.title') }}
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#slidesid_slides" role="tab" data-toggle="tab">
                        {{ trans('cruds.slide.title') }}
                    </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" role="tabpanel" id="page_page_custom_fields">
                    @includeIf('admin.contentPages.relationships.pagePageCustomFields', ['pageCustomFields' => $contentPage->pagePageCustomFields])
                </div>
                <div class="tab-pane" role="tabpanel" id="contact_info_locations">
                    @includeIf('admin.contentPages.relationships.contactInfoLocations', ['locations' => $contentPage->contactInfoLocations])
                </div>
                <div class="tab-pane" role="tabpanel" id="slidesid_slides">
                    @includeIf('admin.contentPages.relationships.slidesidSlides', ['slides' => $contentPage->slidesidSlides])
                </div>
            </div>
        </div>
    </div>
</div>
</div> --}}

@endsection
