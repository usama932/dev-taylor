@extends('layouts.admin')
@section('content')
<div class="card">
   <div class="card-header">
      {{ trans('global.edit') }} {{ trans('cruds.contentPage.title_singular') }}
   </div>
   <div class="card-body">
      <form method="POST" action="{{ route("admin.content-pages.update", [$contentPage->id]) }}" enctype="multipart/form-data">
      @method('PUT')
      @csrf
      <div class="form-group">
         <label class="required" for="title">{{ trans('cruds.contentPage.fields.title') }}</label>
         <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $contentPage->title) }}" required>
         @if($errors->has('title'))
         <div class="invalid-feedback">
            {{ $errors->first('title') }}
         </div>
         @endif
         <span class="help-block">{{ trans('cruds.contentPage.fields.title_helper') }}</span>
      </div>
      <div class="form-group">
         <label for="excerpt">{{ trans('cruds.contentPage.fields.excerpt') }}</label>
         <textarea class="form-control {{ $errors->has('excerpt') ? 'is-invalid' : '' }}" name="excerpt" id="excerpt">{{ old('excerpt', $contentPage->excerpt) }}</textarea>
         @if($errors->has('excerpt'))
         <div class="invalid-feedback">
            {{ $errors->first('excerpt') }}
         </div>
         @endif
         <span class="help-block">{{ trans('cruds.contentPage.fields.excerpt_helper') }}</span>
      </div>
      <div class="form-group">
         <label for="page_text">{{ trans('cruds.contentPage.fields.page_text') }}</label>
         <textarea class="form-control ckeditor {{ $errors->has('page_text') ? 'is-invalid' : '' }}" name="page_text" id="page_text">{!! old('page_text', $contentPage->page_text) !!}</textarea>
         @if($errors->has('page_text'))
         <div class="invalid-feedback">
            {{ $errors->first('page_text') }}
         </div>
         @endif
         <span class="help-block">{{ trans('cruds.contentPage.fields.page_text_helper') }}</span>
      </div>
      <div class="form-group">
         <label for="featured_image">{{ trans('cruds.contentPage.fields.featured_image') }}</label>
         <div class="needsclick dropzone {{ $errors->has('featured_image') ? 'is-invalid' : '' }}" id="featured_image-dropzone">
         </div>
         @if($errors->has('featured_image'))
         <div class="invalid-feedback">
            {{ $errors->first('featured_image') }}
         </div>
         @endif
         <span class="help-block">{{ trans('cruds.contentPage.fields.featured_image_helper') }}</span>
      </div>
      <div class="form-group">
         <label>{{ trans('cruds.contentPage.fields.status') }}</label>
         <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
         <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
         @foreach(App\Models\ContentPage::STATUS_SELECT as $key => $label)
         <option value="{{ $key }}" {{ old('status', $contentPage->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
         @endforeach
         </select>
         @if($errors->has('status'))
         <div class="invalid-feedback">
            {{ $errors->first('status') }}
         </div>
         @endif
         <span class="help-block">{{ trans('cruds.contentPage.fields.status_helper') }}</span>
      </div>
      <div class="form-group">
         <label for="parent_id">{{ trans('cruds.contentPage.fields.parent') }}</label>
         <select class="form-control select2 {{ $errors->has('parent') ? 'is-invalid' : '' }}" name="parent_id" id="parent_id">
         @foreach($parents as $id => $entry)
         <option value="{{ $id }}" {{ (old('parent_id') ? old('parent_id') : $contentPage->parent->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
         @endforeach
         </select>
         @if($errors->has('parent'))
         <div class="invalid-feedback">
            {{ $errors->first('parent') }}
         </div>
         @endif
         <span class="help-block">{{ trans('cruds.contentPage.fields.parent_helper') }}</span>
      </div>
      @if($contentPage->title == 'Contact Us')
        @foreach($contentPage->contactInfoLocations as $key => $custom)
        <label for="slug">
            <h6>Office {{ $custom->id }}</h6>
        </label>
        <input type="hidden" name="addMoreInputFields[{{  $custom->id}}][location_id]" value="{{  $custom->id}}">
        <div class="form-group">
            <label for="slug">Location Country</label>
            <input class="form-control" type="text" name="addMoreInputFields[{{  $custom->id}}][location_country]"  value="{{  $custom->location_country}}">
        </div>
        <div class="form-group">
            <label for="slug">Location Phone</label>
            <input class="form-control" type="text" name="addMoreInputFields[{{  $custom->id}}][location_phone]"  value="{{  $custom->location_phone }}">
        </div>
        <div class="form-group">
            <label for="slug">Location Address</label>
            <input class="form-control" type="text" name="addMoreInputFields[{{  $custom->id}}][location_address]"  value="{{ $custom->location_country }}">
        </div>
        <div class="form-group">
            <label for="slug">Location Address_Link</label>
            <input class="form-control" type="text" name="addMoreInputFields[{{  $custom->id}}][location_addlink]"  value="{{  $custom->location_addlink }}">
        </div>
        @endforeach
      @endif
      @if($contentPage->title == 'Home')
        @if($contentPage->slidesidSlides->count() > 0)

            <h5>Top Banner:</h5>

        <br>
        <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal">
            Add New Slide
        </button>
        <hr>
        <table class=" table table-bordered table-striped table-hover">
            <tr>
            <th>
                Title
            </th>
            {{-- <th>
                Description
            </th> --}}
            <th>
                Status
            </th>
            <th>
                Action
            </th>
            </tr>
            @foreach($contentPage->slidesidSlides as $key => $slide)
            @if($slide->slider->type == 'topslider')
            <tr>
            <td>
                {{  $slide->title  }}
            </td>
            {{-- <td>
                {{  $slide->deescription  }}
            </td> --}}
            <td>
                {{ App\Models\Slide::STATUS_SELECT[$slide->status] ?? '' }}
            </td>
            <td>
                <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editslide{{ $slide->id }}">
                    Edit
                </button>
            </td>
            </tr>
            @endif
            @endforeach

        </table>
        @endif


            <h5>Specialist Section:</h5>

        @if($contentPage->pagePageCustomFields->count() > 0)
        @foreach ($contentPage->pagePageCustomFields as $key => $field )
        @if($field->field_lable == 'specialist')
            <div class="mb-3">
                <input type="hidden" name="addMoreFields[{{  $field->id}}][field_id]" value="{{ $field->id}}">
            <label>Title</label>
            <input class="form-control"  name="addMoreFields[{{  $field->id}}][field_value]" value="{{ $field->field_value }}" >
            </div>
        @endif
        @endforeach
        @endif
        @foreach($contentPage->slidesidSlides as $key => $slide)
        @if($slide->slider->name == 'Specialist')
        <div class="mb-3">
        <label>{{$slide->title}}</label>
        <input type="hidden" name="addMoreInputs[{{  $slide->id}}][slide_id]" value="{{ $slide->id}}">
        <textarea class="form-control"  name="addMoreInputs[{{  $slide->id}}][slide_description]"  >{{ $slide->description }}</textarea>
        </div>
        @endif
        @endforeach
        <label for="slug">
        <h5>Recruitement Section:</h5>
        </label>
        @if($contentPage->pagePageCustomFields->count() > 0)
        @foreach ($contentPage->pagePageCustomFields as $key => $field )
        @if($field->field_lable == 'Recruitment')
            <div class="mb-3">
            <label>Title</label>
            <input type="hidden" name="addMoreFields[{{  $field->id}}][field_id]" value="{{ $field->id}}">

            <input class="form-control"  name="addMoreFields[{{$field->id}}][field_value]" value="{{ $field->field_value }}" >
            </div>
        @endif
        @if($field->field_lable == 'description')
        <div class="mb-3">
        <label>Title</label>
        <input type="hidden" name="addMoreFields[{{  $field->id }}][field_id]" value="{{ $field->id}}">
        <input class="form-control"  name="addMoreFields[{{$field->id}}][field_value]" value="{{ $field->field_value }}" >
        </div>
        @endif
        @endforeach
        @endif
        @foreach($contentPage->slidesidSlides as $key => $slide)
        @if($slide->slider->name == 'Recruitement')
        <div class="mb-3">
        <label>{{$slide->title}}</label>
        <input type="hidden" name="addMoreInputs[{{$slide->id}}][slide_id]" value="{{$slide->id}}">
        <textarea class="form-control"  name="addMoreInputs[{{$slide->id}}][slide_description]">{{ $slide->description }}</textarea>
        </div>
        @endif
        @endforeach

        @endif
      <div class="form-group">
         <label for="slug">{{ trans('cruds.contentPage.fields.slug') }}</label>
         <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', $contentPage->slug) }}">
         @if($errors->has('slug'))
         <div class="invalid-feedback">
            {{ $errors->first('slug') }}
         </div>
         @endif
         <span class="help-block">{{ trans('cruds.contentPage.fields.slug_helper') }}</span>
      </div>
      <div class="form-group">
         <button class="btn btn-danger" type="submit">
         {{ trans('global.save') }}
         </button>
      </div>
      </form>
   </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">  {{ trans('global.create') }} {{ trans('cruds.slide.title_singular') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="card-body">
               <form method="POST" action="{{ route("admin.slides.store") }}" enctype="multipart/form-data">
               @csrf
               <div class="form-group">
                  <label class="required" for="title">{{ trans('cruds.slide.fields.title') }}</label>
                  <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                  @if($errors->has('title'))
                  <div class="invalid-feedback">
                     {{ $errors->first('title') }}
                  </div>
                  @endif
                  <span class="help-block">{{ trans('cruds.slide.fields.title_helper') }}</span>
               </div>
               <div class="form-group">
                  <label for="image">{{ trans('cruds.slide.fields.image') }}</label>
                  {{--
                  <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                  </div>
                  --}}
                  <input type="file" name="image" class="form-control">
                  @if($errors->has('image'))
                  <div class="invalid-feedback">
                     {{ $errors->first('image') }}
                  </div>
                  @endif
                  <span class="help-block">{{ trans('cruds.slide.fields.image_helper') }}</span>
               </div>
               <div class="form-group">
                  <label for="imagetitle">{{ trans('cruds.slide.fields.imagetitle') }}</label>
                  <input class="form-control {{ $errors->has('imagetitle') ? 'is-invalid' : '' }}" type="text" name="imagetitle" id="imagetitle" value="{{ old('imagetitle', '') }}">
                  @if($errors->has('imagetitle'))
                  <div class="invalid-feedback">
                     {{ $errors->first('imagetitle') }}
                  </div>
                  @endif
                  <span class="help-block">{{ trans('cruds.slide.fields.imagetitle_helper') }}</span>
               </div>
               <div class="form-group">
                  <label for="description">{{ trans('cruds.slide.fields.description') }}</label>
                  <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description') }}</textarea>
                  @if($errors->has('description'))
                  <div class="invalid-feedback">
                     {{ $errors->first('description') }}
                  </div>
                  @endif
                  <span class="help-block">{{ trans('cruds.slide.fields.description_helper') }}</span>
               </div>
               <div class="form-group">
                  <label for="cta_button">{{ trans('cruds.slide.fields.cta_button') }}</label>
                  <input class="form-control {{ $errors->has('cta_button') ? 'is-invalid' : '' }}" type="text" name="cta_button" id="cta_button" value="{{ old('cta_button', '') }}">
                  @if($errors->has('cta_button'))
                  <div class="invalid-feedback">
                     {{ $errors->first('cta_button') }}
                  </div>
                  @endif
                  <span class="help-block">{{ trans('cruds.slide.fields.cta_button_helper') }}</span>
               </div>
               <div class="form-group">
                  <label for="url">{{ trans('cruds.slide.fields.url') }}</label>
                  <input class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" type="text" name="url" id="url" value="{{ old('url', '') }}">
                  @if($errors->has('url'))
                  <div class="invalid-feedback">
                     {{ $errors->first('url') }}
                  </div>
                  @endif
                  <span class="help-b ck">{{ trans('cruds.slide.fields.url_helper') }}</span>
               </div>
               <div class="form-group">
                  <label>{{ trans('cruds.slide.fields.status') }}</label>
                  <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                  <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                  @foreach(App\Models\Slide::STATUS_SELECT as $key => $label)
                  <option value="{{ $key }}" {{ old('status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                  @endforeach
                  </select>
                  @if($errors->has('status'))
                  <div class="invalid-feedback">
                     {{ $errors->first('status') }}
                  </div>
                  @endif
                  <span class="help-block">{{ trans('cruds.slide.fields.status_helper') }}</span>
               </div>
               <div class="form-group">
                  <label class="required" for="slider_id">{{ trans('cruds.slide.fields.slider') }}</label>
                  <select class="form-control select2 {{ $errors->has('slider') ? 'is-invalid' : '' }}" name="slider_id" id="slider_id" required>
                  @foreach($sliders as $id => $entry)
                  <option value="{{ $id }}" {{ old('slider_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                  @endforeach
                  </select>
                  @if($errors->has('slider'))
                  <div class="invalid-feedback">
                     {{ $errors->first('slider') }}
                  </div>
                  @endif
                  <span class="help-block">{{ trans('cruds.slide.fields.slider_helper') }}</span>
               </div>
               {{--
               <div class="form-group">
                  <label for="parent_id">{{ trans('cruds.slide.fields.parent') }}</label>
                  <select class="form-control select2 {{ $errors->has('parent') ? 'is-invalid' : '' }}" name="parent_id" id="parent_id">
                  @foreach($slide_parents as $id => $entry)
                  <option value="{{ $id }}" {{ old('parent_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                  @endforeach
                  </select>
                  @if($errors->has('parent'))
                  <div class="invalid-feedback">
                     {{ $errors->first('parent') }}
                  </div>
                  @endif
                  <span class="help-block">{{ trans('cruds.slide.fields.parent_helper') }}</span>
               </div>
               --}}
               <div class="form-group">
                  <label for="slidesid_id">Page</label>
                  <select class="form-control select2 {{ $errors->has('slidesid') ? 'is-invalid' : '' }}" name="slidesid_id" id="slidesid_id">
                  @foreach($parents1 as $id => $entry)
                  <option value="{{ $id }}" {{ old('slidesid_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                  @endforeach
                  </select>
                  @if($errors->has('slidesid'))
                  <div class="invalid-feedback">
                     {{ $errors->first('slidesid') }}
                  </div>
                  @endif
                  <span class="help-block">{{ trans('cruds.slide.fields.slidesid_helper') }}</span>
               </div>
               <div class="form-group">
                  <button class="btn btn-danger" type="submit">
                  {{ trans('global.save') }}
                  </button>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
{{-- END slide create --}}
@foreach($contentPage->slidesidSlides as $key => $slide)
<div class="modal fade" id="editslide{{ $slide->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">  {{ trans('global.create') }} {{ trans('cruds.slide.title_singular') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="card-body">
               <div class="card-body">
                  <form method="POST" action="{{ route("admin.slides.update", [$slide->id]) }}" enctype="multipart/form-data">
                  @method('PUT')
                  @csrf
                  <div class="form-group">
                     <label class="required" for="title">{{ trans('cruds.slide.fields.title') }}</label>
                     <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $slide->title) }}" required>
                     @if($errors->has('title'))
                     <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                     </div>
                     @endif
                     <span class="help-block">{{ trans('cruds.slide.fields.title_helper') }}</span>
                  </div>
                  <div class="form-group">
                     <label for="image">{{ trans('cruds.slide.fields.image') }}</label>
                     <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                     </div>
                     <small class="text-danger">Max file size is 10MB</small>
                     {{-- <input type="file" name="image" class="form-control"> --}}
                     @if($errors->has('image'))
                     <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                     </div>
                     @endif
                     <span class="help-block">{{ trans('cruds.slide.fields.image_helper') }}</span>
                  </div>
                  <div class="form-group">
                     <label for="imagetitle">{{ trans('cruds.slide.fields.imagetitle') }}</label>
                     <input class="form-control {{ $errors->has('imagetitle') ? 'is-invalid' : '' }}" type="text" name="imagetitle" id="imagetitle" value="{{ old('imagetitle', $slide->imagetitle) }}">
                     @if($errors->has('imagetitle'))
                     <div class="invalid-feedback">
                        {{ $errors->first('imagetitle') }}
                     </div>
                     @endif
                     <span class="help-block">{{ trans('cruds.slide.fields.imagetitle_helper') }}</span>
                  </div>
                  <div class="form-group">
                     <label for="description">{{ trans('cruds.slide.fields.description') }}</label>
                     <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $slide->description) }}</textarea>
                     @if($errors->has('description'))
                     <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                     </div>
                     @endif
                     <span class="help-block">{{ trans('cruds.slide.fields.description_helper') }}</span>
                  </div>
                  <div class="form-group">
                     <label for="cta_button">{{ trans('cruds.slide.fields.cta_button') }}</label>
                     <input class="form-control {{ $errors->has('cta_button') ? 'is-invalid' : '' }}" type="text" name="cta_button" id="cta_button" value="{{ old('cta_button', $slide->cta_button) }}">
                     @if($errors->has('cta_button'))
                     <div class="invalid-feedback">
                        {{ $errors->first('cta_button') }}
                     </div>
                     @endif
                     <span class="help-block">{{ trans('cruds.slide.fields.cta_button_helper') }}</span>
                  </div>
                  <div class="form-group">
                     <label for="url">{{ trans('cruds.slide.fields.url') }}</label>
                     <input class="form-control {{ $errors->has('url') ? 'is-invalid' : '' }}" type="text" name="url" id="url" value="{{ old('url', $slide->url) }}">
                     @if($errors->has('url'))
                     <div class="invalid-feedback">
                        {{ $errors->first('url') }}
                     </div>
                     @endif
                     <span class="help-block">{{ trans('cruds.slide.fields.url_helper') }}</span>
                  </div>
                  <div class="form-group">
                     <label>{{ trans('cruds.slide.fields.status') }}</label>
                     <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                     <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                     @foreach(App\Models\Slide::STATUS_SELECT as $key => $label)
                     <option value="{{ $key }}" {{ old('status', $slide->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                     @endforeach
                     </select>
                     @if($errors->has('status'))
                     <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                     </div>
                     @endif
                     <span class="help-block">{{ trans('cruds.slide.fields.status_helper') }}</span>
                  </div>
                  <div class="form-group">
                     <label class="required" for="slider_id">{{ trans('cruds.slide.fields.slider') }}</label>
                     <select class="form-control select2 {{ $errors->has('slider') ? 'is-invalid' : '' }}" name="slider_id" id="slider_id" required>
                     @foreach($sliders as $id => $entry)
                     <option value="{{ $id }}" {{ (old('slider_id') ? old('slider_id') : $slide->slider->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                     @endforeach
                     </select>
                     @if($errors->has('slider'))
                     <div class="invalid-feedback">
                        {{ $errors->first('slider') }}
                     </div>
                     @endif
                     <span class="help-block">{{ trans('cruds.slide.fields.slider_helper') }}</span>
                  </div>
                  {{--
                  <div class="form-group">
                     <label for="parent_id">{{ trans('cruds.slide.fields.parent') }}</label>
                     <select class="form-control select2 {{ $errors->has('parent') ? 'is-invalid' : '' }}" name="parent_id" id="parent_id">
                     @foreach($parents as $id => $entry)
                     <option value="{{ $id }}" {{ (old('parent_id') ? old('parent_id') : $slide->parent->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                     @endforeach
                     </select>
                     @if($errors->has('parent'))
                     <div class="invalid-feedback">
                        {{ $errors->first('parent') }}
                     </div>
                     @endif
                     <span class="help-block">{{ trans('cruds.slide.fields.parent_helper') }}</span>
                  </div>
                  --}}
                  <div class="form-group">
                     <label for="slidesid_id">Page</label>
                     <select class="form-control select2 {{ $errors->has('slidesid') ? 'is-invalid' : '' }}" name="slidesid_id" id="slidesid_id">
                     @foreach($parents1 as $id => $entry)
                     <option value="{{ $id }}" {{ (old('slidesid_id') ? old('slidesid_id') : $slide->slidesid->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                     @endforeach
                     </select>
                     @if($errors->has('slidesid'))
                     <div class="invalid-feedback">
                        {{ $errors->first('slidesid') }}
                     </div>
                     @endif
                     <span class="help-block">{{ trans('cruds.slide.fields.slidesid_helper') }}</span>
                  </div>
                  <div class="form-group">
                     <button class="btn btn-danger" type="submit">
                     {{ trans('global.save') }}
                     </button>
                  </div>
                  </form>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endforeach
{{-- End Slide Modals --}}
@foreach($contentPage->pagePageCustomFields as $key => $pageCustomField)
<div class="modal fade" id="editfields{{ $pageCustomField->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">  {{ trans('global.edit') }} {{ trans('cruds.pageCustomField.title_singular') }}</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="card-body">
               <form method="POST" action="{{ route("admin.page-custom-fields.update", [$pageCustomField->id]) }}" enctype="multipart/form-data">
               @method('PUT')
               @csrf
               <div class="form-group">
                  <label class="required" for="field_lable">{{ trans('cruds.pageCustomField.fields.field_lable') }}</label>
                  <input class="form-control {{ $errors->has('field_lable') ? 'is-invalid' : '' }}" type="text" name="field_lable" id="field_lable" value="{{ old('field_lable', $pageCustomField->field_lable) }}" readonly>
                  @if($errors->has('field_lable'))
                  <div class="invalid-feedback">
                     {{ $errors->first('field_lable') }}
                  </div>
                  @endif
                  <span class="help-block">{{ trans('cruds.pageCustomField.fields.field_lable_helper') }}</span>
               </div>
               <div class="form-group">
                  <label class="required" for="field_value">{{ trans('cruds.pageCustomField.fields.field_value') }}</label>
                  <input class="form-control {{ $errors->has('field_value') ? 'is-invalid' : '' }}" type="text" name="field_value" id="field_value" value="{{ old('field_value', $pageCustomField->field_value) }}" required>
                  @if($errors->has('field_value'))
                  <div class="invalid-feedback">
                     {{ $errors->first('field_value') }}
                  </div>
                  @endif
                  <span class="help-block">{{ trans('cruds.pageCustomField.fields.field_value_helper') }}</span>
               </div>
               {{--
               <div class="form-group">
                  <label>{{ trans('cruds.pageCustomField.fields.type') }}</label>
                  <select class="form-control {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type" id="type">
                  <option value disabled {{ old('type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                  @foreach(App\Models\PageCustomField::TYPE_SELECT as $key => $label)
                  <option value="{{ $key }}" {{ old('type', $pageCustomField->type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                  @endforeach
                  </select>
                  @if($errors->has('type'))
                  <div class="invalid-feedback">
                     {{ $errors->first('type') }}
                  </div>
                  @endif
                  <span class="help-block">{{ trans('cruds.pageCustomField.fields.type_helper') }}</span>
               </div>
               <div class="form-group">
                  <label for="page_id">{{ trans('cruds.pageCustomField.fields.page') }}</label>
                  <select class="form-control select2 {{ $errors->has('page') ? 'is-invalid' : '' }}" name="page_id" id="page_id">
                  @foreach($pages as $id => $entry)
                  <option value="{{ $id }}" {{ (old('page_id') ? old('page_id') : $pageCustomField->page->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                  @endforeach
                  </select>
                  @if($errors->has('page'))
                  <div class="invalid-feedback">
                     {{ $errors->first('page') }}
                  </div>
                  @endif
                  <span class="help-block">{{ trans('cruds.pageCustomField.fields.page_helper') }}</span>
               </div>
               --}}
               <div class="form-group">
                  <button class="btn btn-danger" type="submit">
                  {{ trans('global.save') }}
                  </button>
               </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>
@endforeach
@endsection
@section('scripts')
<script>
   $(document).ready(function () {
   function SimpleUploadAdapter(editor) {
   editor.plugins.get('FileRepository').createUploadAdapter = function(loader) {
     return {
       upload: function() {
         return loader.file
           .then(function (file) {
             return new Promise(function(resolve, reject) {
               // Init request
               var xhr = new XMLHttpRequest();
               xhr.open('POST', '{{ route('admin.content-pages.storeCKEditorImages') }}', true);
               xhr.setRequestHeader('x-csrf-token', window._token);
               xhr.setRequestHeader('Accept', 'application/json');
               xhr.responseType = 'json';

               // Init listeners
               var genericErrorText = `Couldn't upload file: ${ file.name }.`;
               xhr.addEventListener('error', function() { reject(genericErrorText) });
               xhr.addEventListener('abort', function() { reject() });
               xhr.addEventListener('load', function() {
                 var response = xhr.response;

                 if (!response || xhr.status !== 201) {
                   return reject(response && response.message ? `${genericErrorText}\n${xhr.status} ${response.message}` : `${genericErrorText}\n ${xhr.status} ${xhr.statusText}`);
                 }

                 $('form').append('<input type="hidden" name="ck-media[]" value="' + response.id + '">');

                 resolve({ default: response.url });
               });

               if (xhr.upload) {
                 xhr.upload.addEventListener('progress', function(e) {
                   if (e.lengthComputable) {
                     loader.uploadTotal = e.total;
                     loader.uploaded = e.loaded;
                   }
                 });
               }

               // Send request
               var data = new FormData();
               data.append('upload', file);
               data.append('crud_id', '{{ $contentPage->id ?? 0 }}');
               xhr.send(data);
             });
           })
       }
     };
   }
   }

   var allEditors = document.querySelectorAll('.ckeditor');
   for (var i = 0; i < allEditors.length; ++i) {
   ClassicEditor.create(
     allEditors[i], {
       extraPlugins: [SimpleUploadAdapter]
     }
   );
   }
   });
</script>
<script>
   Dropzone.options.featuredImageDropzone = {
   url: '{{ route('admin.content-pages.storeMedia') }}',
   maxFilesize: 2, // MB
   acceptedFiles: '.jpeg,.jpg,.png,.gif',
   maxFiles: 1,
   addRemoveLinks: true,
   headers: {
     'X-CSRF-TOKEN': "{{ csrf_token() }}"
   },
   params: {
     size: 2,
     width: 4096,
     height: 4096
   },
   success: function (file, response) {
     $('form').find('input[name="featured_image"]').remove()
     $('form').append('<input type="hidden" name="featured_image" value="' + response.name + '">')
   },
   removedfile: function (file) {
     file.previewElement.remove()
     if (file.status !== 'error') {
       $('form').find('input[name="featured_image"]').remove()
       this.options.maxFiles = this.options.maxFiles + 1
     }
   },
   init: function () {
   @if(isset($contentPage) && $contentPage->featured_image)
     var file = {!! json_encode($contentPage->featured_image) !!}
         this.options.addedfile.call(this, file)
     this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
     file.previewElement.classList.add('dz-complete')
     $('form').append('<input type="hidden" name="featured_image" value="' + file.file_name + '">')
     this.options.maxFiles = this.options.maxFiles - 1
   @endif
   },
   error: function (file, response) {
       if ($.type(response) === 'string') {
           var message = response //dropzone sends it's own error messages in string
       } else {
           var message = response.errors.file
       }
       file.previewElement.classList.add('dz-error')
       _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
       _results = []
       for (_i = 0, _len = _ref.length; _i < _len; _i++) {
           node = _ref[_i]
           _results.push(node.textContent = message)
       }

       return _results
   }
   }

</script>
<script>
   Dropzone.options.imageDropzone = {
   url: '{{ route('admin.slides.storeMedia') }}',
   maxFilesize: 10, // MB
   acceptedFiles: '.jpeg,.jpg,.png,.gif',
   maxFiles: 1,
   addRemoveLinks: true,
   headers: {
     'X-CSRF-TOKEN': "{{ csrf_token() }}"
   },
   params: {
     size: 10,
     width: 4096,
     height: 4096
   },
   success: function (file, response) {
     $('form').find('input[name="image"]').remove()
     $('form').append('<input type="hidden" name="image" value="' + response.name + '">')
   },
   removedfile: function (file) {
     file.previewElement.remove()
     if (file.status !== 'error') {
       $('form').find('input[name="image"]').remove()
       this.options.maxFiles = this.options.maxFiles + 1
     }
   },
   init: function () {
   @if(isset($slide) && $slide->image)
     var file = {!! json_encode($slide->image) !!}
         this.options.addedfile.call(this, file)
     this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
     file.previewElement.classList.add('dz-complete')
     $('form').append('<input type="hidden" name="image" value="' + file.file_name + '">')
     this.options.maxFiles = this.options.maxFiles - 1
   @endif
   },
   error: function (file, response) {
       if ($.type(response) === 'string') {
           var message = response //dropzone sends it's own error messages in string
       } else {
           var message = response.errors.file
       }
       file.previewElement.classList.add('dz-error')
       _ref = file.previewElement.querySelectorAll('[data-dz-errormessage]')
       _results = []
       for (_i = 0, _len = _ref.length; _i < _len; _i++) {
           node = _ref[_i]
           _results.push(node.textContent = message)
       }

       return _results
   }
   }

</script>
@endsection
