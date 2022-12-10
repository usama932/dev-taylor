<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
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
              {{ trans('global.edit') }} {{ trans('cruds.contentPage.title_singular') }}
              </h3>
            </div>
          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0 "  style="background-color:#F0F4F8 !important">
         <form method="POST" action="{{ route("admin.content-pages.update", [$contentPage->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="body">
               <div class="mb-3 mt-3">
                  <div class="form-group">
                     <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 " for="title">{{ trans('cruds.contentPage.fields.title') }}</label>
                     <input class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $contentPage->title) }}" required>
                     @if($errors->has('title'))
                     <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                     </div>
                     @endif
                     <span class="help-block">{{ trans('cruds.contentPage.fields.title_helper') }}</span>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="form-group">
                     <label for="excerpt" class="block uppercase text-blueGray-600 text-xs font-bold mb-2 ">{{ trans('cruds.contentPage.fields.excerpt') }}</label>
                     <textarea class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 rows="4" cols="160" {{ $errors->has('excerpt') ? 'is-invalid' : '' }}" name="excerpt" id="excerpt">{{ old('excerpt', $contentPage->excerpt) }}</textarea>
                     @if($errors->has('excerpt'))
                     <div class="invalid-feedback">
                        {{ $errors->first('excerpt') }}
                     </div>
                     @endif
                     <span class="help-block">{{ trans('cruds.contentPage.fields.excerpt_helper') }}</span>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="form-group">
                     <label for="page_text" class="block uppercase text-blueGray-600 text-xs font-bold mb-2 ">{{ trans('cruds.contentPage.fields.page_text') }}</label>
                     <textarea class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 ckeditor {{ $errors->has('page_text') ? 'is-invalid' : '' }}" name="page_text" id="page_text">{!! old('page_text', $contentPage->page_text) !!}</textarea>
                     @if($errors->has('page_text'))
                     <div class="invalid-feedback">
                        {{ $errors->first('page_text') }}
                     </div>
                     @endif
                     <span class="help-block">{{ trans('cruds.contentPage.fields.page_text_helper') }}</span>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="form-group">
                     <label for="featured_image"  class="block uppercase text-blueGray-600 text-xs font-bold mb-2 ">{{ trans('cruds.contentPage.fields.featured_image') }}</label>
                     <div class=" border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150needsclick dropzone {{ $errors->has('featured_image') ? 'is-invalid' : '' }}" id="featured_image-dropzone">
                     </div>
                     @if($errors->has('featured_image'))
                     <div class="invalid-feedback">
                        {{ $errors->first('featured_image') }}
                     </div>
                     @endif
                     <span class="help-block">{{ trans('cruds.contentPage.fields.featured_image_helper') }}</span>
                  </div>
               </div>
               <div class="mb-3">
                  <div class="form-group">
                     <label  class="block uppercase text-blueGray-600 text-xs font-bold mb-2 ">{{ trans('cruds.contentPage.fields.status') }}</label>
                     <select class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
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
               </div>
               <div class="mb-3">
                  <div class="form-group">
                     <label for="parent_id"  class="block uppercase text-blueGray-600 text-xs font-bold mb-2 ">{{ trans('cruds.contentPage.fields.parent') }}</label>
                     <select class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 select2 {{ $errors->has('parent') ? 'is-invalid' : '' }}" name="parent_id" id="parent_id">
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
               </div>
               @if($contentPage->title == 'Contact Us')
               @foreach($contentPage->contactInfoLocations as $key => $custom)
               <div class="mb-3">
                  <label for="slug"  class="block uppercase text-blueGray-600 text-xs font-bold mb-2 ">
                     <h6>Office {{ $custom->id }}</h6>
                  </label>
                  <input class="border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 form-control" type="hidden" name="addMoreInputFields[{{  $custom->id}}][location_id]" value="{{  $custom->id}}">
               </div>
               <div class="mb-3">
                  <div class="form-group">
                     <label for="slug"  class="block uppercase text-blueGray-600 text-xs font-bold mb-2 ">Location Country</label>
                     <input class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" name="addMoreInputFields[{{  $custom->id}}][location_country]"  value="{{  $custom->location_country}}">
                  </div>
               </div>
               <div class="mb-3">
                  <div class="form-group">
                     <label for="slug"  class="block uppercase text-blueGray-600 text-xs font-bold mb-2 ">Location Phone</label>
                     <input class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" name="addMoreInputFields[{{  $custom->id}}][location_phone]"  value="{{  $custom->location_phone }}">
                  </div>
               </div>
               <div class="mb-3"  class="block uppercase text-blueGray-600 text-xs font-bold mb-2 ">
                  <div class="form-group">
                     <label for="slug">Location Address</label>
                     <input class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" name="addMoreInputFields[{{  $custom->id}}][location_address]"  value="{{ $custom->location_country }}">
                  </div>
               </div>
               <div class="mb-3">
                  <div class="form-group">
                     <label for="slug"  class="block uppercase text-blueGray-600 text-xs font-bold mb-2 ">Location Address_Link</label>
                     <input class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" type="text" name="addMoreInputFields[{{  $custom->id}}][location_addlink]"  value="{{  $custom->location_addlink }}">
                  </div>
               </div>
               @endforeach
               @endif
               @if($contentPage->title == 'About us')
               <h5>Future Section:</h5>
               @foreach ($contentPage->pagePageCustomFields as $key => $field )
               @if($field->field_lable == 'cta text')
               <div class="mb-3">
                  <label>{{Str::upper( $field->field_lable )}}</label>
                  <input type="hidden" name="addMoreFields[{{  $field->id}}][field_id]" value="{{ $field->id}}">
                  <input class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150"  name="addMoreFields[{{$field->id}}][field_value]" value="{{ $field->field_value }}" >
               </div>
               @endif
               @if($field->field_lable == 'cta url')
               <div class="mb-3">
                  <label>{{Str::upper( $field->field_lable )}}</label>
                  <input type="hidden" name="addMoreFields[{{  $field->id }}][field_id]" value="{{ $field->id}}">
                  <input class="form-control "  name="addMoreFields[{{$field->id}}][field_value]" value="{{ $field->field_value }}" >
               </div>
               @endif
               @endforeach
               @if($contentPage->slidesidSlides->count() > 0)
               @foreach($contentPage->slidesidSlides as $key => $slide)
               @if($slide->slider->name == 'Future')
               <label>{{Str::upper($slide->title) }}</label>
               <input type="hidden" name="addMoreInputs[{{  $slide->id}}][slide_id]" value="{{ $slide->id}}">
               <textarea class="form-control"  name="addMoreInputs[{{$slide->id}}][slide_description]"  >{{ $slide->description }}</textarea>
               @endif
               @endforeach
               @endif
               @endif
               @if($contentPage->title == 'Home')
               @if($contentPage->slidesidSlides->count() > 0)
               <h5>Top Banner:</h5>
               <br>
               <button type="button" class="btn btn-primary btn-sm" >
               Add New Slide
               </button>
               <hr>
               <table class="stripe hover bordered datatable">
                  <tr>
                     <th>
                        Title
                     </th>
                     {{-- 
                     <th>
                        Description
                     </th>
                     --}}
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
                     {{-- 
                     <td>
                        {{  $slide->deescription  }}
                     </td>
                     --}}
                     <td>
                        {{ App\Models\Slide::STATUS_SELECT[$slide->status] ?? '' }}
                     </td>
                     <td>
                        {{-- <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editslide{{ $slide->id }}">
                        Edit
                        </button> --}}
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
               @if($field->field_lable == 'Description')
               <div class="mb-3">
                  <label>Description</label>
                  <input type="hidden" name="addMoreFields[{{  $field->id }}][field_id]" value="{{ $field->id}}">
                  <input class="form-control"  name="addMoreFields[{{$field->id}}][field_value]" value="{{ $field->field_value }}" >
               </div>
               @endif
               @endforeach
               @endif
               @foreach($contentPage->slidesidSlides as $key => $slide)
               @if($slide->slider->name == 'Recruitment')
               <div class="mb-3">
                  <label>{{$slide->title}}</label>
                  <input type="hidden" name="addMoreInputs[{{$slide->id}}][slide_id]" value="{{$slide->id}}">
                  <textarea class="form-control"  name="addMoreInputs[{{$slide->id}}][slide_description]">{{ $slide->description }}</textarea>
               </div>
               @endif
               @endforeach
               @endif
               <div class="form-group">
                  <label for="slug"  class="block uppercase text-blueGray-600 text-xs font-bold mb-2 ">{{ trans('cruds.contentPage.fields.slug') }}</label>
                  <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', $contentPage->slug) }}">
                  @if($errors->has('slug'))
                  <div class="invalid-feedback">
                     {{ $errors->first('slug') }}
                  </div>
                  @endif
                  <span class="help-block">{{ trans('cruds.contentPage.fields.slug_helper') }}</span>
               </div>
                 <div class="form-group">
                    <button class="btn btn-indigo mr-2" type="submit">
                        Save
                    </button>
                  </div>
            </div>
         </form>
        </div>
      </div>
    </div>
  </div>
</div>

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
   maxFilesize: 25, // MB
   acceptedFiles: '.jpeg,.jpg,.png,.gif',
   maxFiles: 1,
   addRemoveLinks: true,
   headers: {
     'X-CSRF-TOKEN': "{{ csrf_token() }}"
   },
   params: {
     size: 25,
      width: 51600,
      height: 51600
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
