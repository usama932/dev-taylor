@extends('layouts.admin')
@section('content')
{{-- 
<div class="main-card">
    <div class="header">
        {{ trans('global.create') }} {{ trans('cruds.caseStudy.title_singular') }}
    </div>

    
        <form method="POST" action="{{ route("admin.case-studies.store") }}" enctype="multipart/form-data">
            <div class="body">
                @csrf
                <div class="mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 required" for="title">{{ trans('cruds.caseStudy.fields.title') }}</label>
                    <div class="form-group">
                        <input class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                    </div>
                    @if($errors->has('title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.title_helper') }}</span>
                </div>
            <div class="mb-3">
                    <label for="subtitle" class="text-xs required" >{{ trans('cruds.caseStudy.fields.subtitle') }}</label>
                    <div class="form-group">
                    <input class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  {{ $errors->has('subtitle') ? 'is-invalid' : '' }}" type="text" name="subtitle" id="subtitle" value="{{ old('subtitle', '') }}">
                    </div>
                    @if($errors->has('subtitle'))
                        <div class="invalid-feedback">
                            {{ $errors->first('subtitle') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.subtitle_helper') }}</span>
                </div>
                <div class="mb-3">
                    <label for="content" >{{ trans('cruds.caseStudy.fields.content') }}</label>
                    <div class="form-group">
                    <textarea class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  ckeditor {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content" id="content">{!! old('content') !!}</textarea>
                    </div>
                    @if($errors->has('content'))
                        <div class="invalid-feedback">
                            {{ $errors->first('content') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.content_helper') }}</span>
                </div>
                <div class="mb-3">
                    <label for="logo" class="text-xs " >{{ trans('cruds.caseStudy.fields.logo') }}</label>
                    <div class="form-group">
                    <div class="needsclick  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                    </div>
                    </div>
                    @if($errors->has('logo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('logo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.logo_helper') }}</span>
                </div>
                <div class="mb-3">
                    <label for="featuredtitle" class="text-xs required" >{{ trans('cruds.caseStudy.fields.featuredtitle') }}</label>
                    <div class="form-group">
                    <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('featuredtitle') ? 'is-invalid' : '' }}" type="text" name="featuredtitle" id="featuredtitle" value="{{ old('featuredtitle', '') }}">
                    </div>
                    @if($errors->has('featuredtitle'))
                        <div class="invalid-feedback">
                            {{ $errors->first('featuredtitle') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.featuredtitle_helper') }}</span>
                </div>
                <div class="mb-3">
                    <label for="featuredimage" class="text-xs required" >{{ trans('cruds.caseStudy.fields.featuredimage') }}</label>
                    <div class="form-group">
                    <div class="needsclick  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  dropzone {{ $errors->has('featuredimage') ? 'is-invalid' : '' }}" id="featuredimage-dropzone">
                    </div>
                    </div>
                    @if($errors->has('featuredimage'))
                        <div class="invalid-feedback">
                            {{ $errors->first('featuredimage') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.featuredimage_helper') }}</span>
                </div>
                <div class="mb-3">
                    <label for="cta_button" class="text-xs required" >{{ trans('cruds.caseStudy.fields.cta_button') }}</label>
                    <div class="form-group">
                    <input class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  {{ $errors->has('cta_button') ? 'is-invalid' : '' }}" type="text" name="cta_button" id="cta_button" value="{{ old('cta_button', '') }}">
                    </div>
                    @if($errors->has('cta_button'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cta_button') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.cta_button_helper') }}</span>
                </div>
                <div class="mb-3">
                    <label for="cst_link" class="text-xs required" >{{ trans('cruds.caseStudy.fields.cst_link') }}</label>
                    <div class="form-group">
                    <input class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('cst_link') ? 'is-invalid' : '' }}" type="text" name="cst_link" id="cst_link" value="{{ old('cst_link', '') }}">
                    </div>
                    @if($errors->has('cst_link'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cst_link') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.cst_link_helper') }}</span>
                </div>
                <div class="mb-3">
                    <div class="form-check {{ $errors->has('featured') ? 'is-invalid' : '' }}">
                
                    
                            <input type="hidden" name="featured" value="0">
                        
                            <input class="form-check-input" type="checkbox" name="featured" id="featured" value="1" {{ old('featured', 0) == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="featured">{{ trans('cruds.caseStudy.fields.featured') }}</label>
                        </div>
                    
                    @if($errors->has('featured'))
                        <div class="invalid-feedback">
                            {{ $errors->first('featured') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.featured_helper') }}</span>
                </div>
                <div class="mb-3">
                    <label class="text-xs required" >{{ trans('cruds.caseStudy.fields.status') }}</label>
                    <div class="form-group">
                    <select class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 { $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                        <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\Models\CaseStudy::STATUS_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    </div>
                    @if($errors->has('status'))
                        <div class="invalid-feedback">
                            {{ $errors->first('status') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.status_helper') }}</span>
                </div>
                <div class="mb-3">
                    <label for="slug" class="text-xs required" >{{ trans('cruds.caseStudy.fields.slug') }}</label>
                    <div class="form-group">
                    <input class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', '') }}">
                    </div>
                    @if($errors->has('slug'))
                        <div class="invalid-feedback">
                            {{ $errors->first('slug') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.slug_helper') }}</span>
                </div>
                <div class="mb-3">
                    <label for="orderby" class="text-xs required" >{{ trans('cruds.caseStudy.fields.orderby') }}</label>
                    <div class="form-group">
                    <input class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150  {{ $errors->has('orderby') ? 'is-invalid' : '' }}" type="number" name="orderby" id="orderby" value="{{ old('orderby', '0') }}" step="1">
                    </div>
                    @if($errors->has('orderby'))
                        <div class="invalid-feedback">
                            {{ $errors->first('orderby') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.orderby_helper') }}</span>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <div class="footer">
                            <button type="submit" class="submit-button"> {{ trans('global.save') }}</button>
                        </div>   
                    </div>
                </div>
            </div>
        </form>
    
</div> --}}


<div class="px-4 md:px-10 mx-auto w-full -m-24">
  <div class="flex flex-wrap mt-4">
    <div class="w-full mb-12 px-4">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
          <div class="flex flex-wrap items-center">
            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
              <h3 class="font-semibold text-lg text-blueGray-700">
               {{ trans('global.create') }} {{ trans('cruds.caseStudy.title_singular') }}
              </h3>
            </div>
          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-blueGray-100">
         <form method="POST" action="{{ route("admin.case-studies.store") }}" enctype="multipart/form-data">
            <div class="body">
                @csrf
                <div class="mb-3 mt-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="title">{{ trans('cruds.caseStudy.fields.title') }}</label>
                    <div class="form-group">
                        <input class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                    </div>
                    @if($errors->has('title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.title_helper') }}</span>
                </div>
            <div class="mb-3">
                    <label for="subtitle" class="block uppercase text-blueGray-600 text-xs font-bold mb-2 required" >{{ trans('cruds.caseStudy.fields.subtitle') }}</label>
                    <div class="form-group">
                    <input class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('subtitle') ? 'is-invalid' : '' }}" type="text" name="subtitle" id="subtitle" value="{{ old('subtitle', '') }}">
                    </div>
                    @if($errors->has('subtitle'))
                        <div class="invalid-feedback">
                            {{ $errors->first('subtitle') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.subtitle_helper') }}</span>
                </div>
                <div class="mb-3">
                    <label for="content" >{{ trans('cruds.caseStudy.fields.content') }}</label>
                    <div class="form-group">
                    <textarea class="form-control ckeditor {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content" id="content">{!! old('content') !!}</textarea>
                    </div>
                    @if($errors->has('content'))
                        <div class="invalid-feedback">
                            {{ $errors->first('content') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.content_helper') }}</span>
                </div>
                <div class="mb-3">
                    <label for="logo" class="block uppercase text-blueGray-600 text-xs font-bold mb-2 " >{{ trans('cruds.caseStudy.fields.logo') }}</label>
                    <div class="form-group">
                    <div class="needsclick dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                    </div>
                    </div>
                    @if($errors->has('logo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('logo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.logo_helper') }}</span>
                </div>
                <div class="mb-3">
                    <label for="featuredtitle" class="block uppercase text-blueGray-600 text-xs font-bold mb-2 required" >{{ trans('cruds.caseStudy.fields.featuredtitle') }}</label>
                    <div class="form-group">
                    <input class="form-control {{ $errors->has('featuredtitle') ? 'is-invalid' : '' }}" type="text" name="featuredtitle" id="featuredtitle" value="{{ old('featuredtitle', '') }}">
                    </div>
                    @if($errors->has('featuredtitle'))
                        <div class="invalid-feedback">
                            {{ $errors->first('featuredtitle') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.featuredtitle_helper') }}</span>
                </div>
                <div class="mb-3">
                    <label for="featuredimage" class="block uppercase text-blueGray-600 text-xs font-bold mb-2 required" >{{ trans('cruds.caseStudy.fields.featuredimage') }}</label>
                    <div class="form-group">
                    <div class="needsclick dropzone {{ $errors->has('featuredimage') ? 'is-invalid' : '' }}" id="featuredimage-dropzone">
                    </div>
                    </div>
                    @if($errors->has('featuredimage'))
                        <div class="invalid-feedback">
                            {{ $errors->first('featuredimage') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.featuredimage_helper') }}</span>
                </div>
                <div class="mb-3">
                    <label for="cta_button" class="block uppercase text-blueGray-600 text-xs font-bold mb-2 required" >{{ trans('cruds.caseStudy.fields.cta_button') }}</label>
                    <div class="form-group">
                    <input class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('cta_button') ? 'is-invalid' : '' }}" type="text" name="cta_button" id="cta_button" value="{{ old('cta_button', '') }}">
                    </div>
                    @if($errors->has('cta_button'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cta_button') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.cta_button_helper') }}</span>
                </div>
                <div class="mb-3">
                    <label for="cst_link" class="block uppercase text-blueGray-600 text-xs font-bold mb-2 required" >{{ trans('cruds.caseStudy.fields.cst_link') }}</label>
                    <div class="form-group">
                    <input class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('cst_link') ? 'is-invalid' : '' }}" type="text" name="cst_link" id="cst_link" value="{{ old('cst_link', '') }}">
                    </div>
                    @if($errors->has('cst_link'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cst_link') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.cst_link_helper') }}</span>
                </div>
                <div class="mb-3">
                    <div class="form-check {{ $errors->has('featured') ? 'is-invalid' : '' }}">
                
                    
                            <input type="hidden" name="featured" value="0">
                        
                            <input class="form-check-input" type="checkbox" name="featured" id="featured" value="1" {{ old('featured', 0) == 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="featured">{{ trans('cruds.caseStudy.fields.featured') }}</label>
                        </div>
                    
                    @if($errors->has('featured'))
                        <div class="invalid-feedback">
                            {{ $errors->first('featured') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.featured_helper') }}</span>
                </div>
                <div class="mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 required" >{{ trans('cruds.caseStudy.fields.status') }}</label>
                    <div class="form-group">
                    <select class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                        <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\Models\CaseStudy::STATUS_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    </div>
                    @if($errors->has('status'))
                        <div class="invalid-feedback">
                            {{ $errors->first('status') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.status_helper') }}</span>
                </div>
                <div class="mb-3">
                    <label for="slug" class="block uppercase text-blueGray-600 text-xs font-bold mb-2 required" >{{ trans('cruds.caseStudy.fields.slug') }}</label>
                    <div class="form-group">
                    <input class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', '') }}">
                    </div>
                    @if($errors->has('slug'))
                        <div class="invalid-feedback">
                            {{ $errors->first('slug') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.slug_helper') }}</span>
                </div>
                <div class="mb-3">
                    <label for="orderby" class="block uppercase text-blueGray-600 text-xs font-bold mb-2 required" >{{ trans('cruds.caseStudy.fields.orderby') }}</label>
                    <div class="form-group">
                    <input class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('orderby') ? 'is-invalid' : '' }}" type="number" name="orderby" id="orderby" value="{{ old('orderby', '0') }}" step="1">
                    </div>
                    @if($errors->has('orderby'))
                        <div class="invalid-feedback">
                            {{ $errors->first('orderby') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.orderby_helper') }}</span>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <div class="footer">
                            <button type="submit" class="submit-button"> {{ trans('global.save') }}</button>
                        </div>   
                    </div>
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
                xhr.open('POST', '{{ route('admin.case-studies.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $caseStudy->id ?? 0 }}');
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
    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.case-studies.storeMedia') }}',
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
      $('form').find('input[name="logo"]').remove()
      $('form').append('<input type="hidden" name="logo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="logo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($caseStudy) && $caseStudy->logo)
      var file = {!! json_encode($caseStudy->logo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="logo" value="' + file.file_name + '">')
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
    Dropzone.options.featuredimageDropzone = {
    url: '{{ route('admin.case-studies.storeMedia') }}',
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
      $('form').find('input[name="featuredimage"]').remove()
      $('form').append('<input type="hidden" name="featuredimage" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="featuredimage"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($caseStudy) && $caseStudy->featuredimage)
      var file = {!! json_encode($caseStudy->featuredimage) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="featuredimage" value="' + file.file_name + '">')
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