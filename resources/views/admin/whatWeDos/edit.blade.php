@extends('layouts.admin')
@section('content')

<div class="main-card">
    <div class="header">
        {{ trans('global.edit') }} {{ trans('cruds.whatWeDo.title_singular') }}
    </div>

    
        <form method="POST" action="{{ route("admin.what-we-dos.update", [$whatWeDo->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="body">
                <div class="mb-3">
                    <label class="text-xs required " for="title">{{ trans('cruds.whatWeDo.fields.title') }}</label>
                    <div class="form-group">
                        
                        <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $whatWeDo->title) }}" required>
                        @if($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.whatWeDo.fields.title_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="excerpt" class="text-xs required ">{{ trans('cruds.whatWeDo.fields.excerpt') }}</label>
                    <div class="form-group">
                        
                        <textarea class="form-control rows="4" cols="160" {{ $errors->has('excerpt') ? 'is-invalid' : '' }}" name="excerpt" id="excerpt">{{ old('excerpt', $whatWeDo->excerpt) }}</textarea>
                        @if($errors->has('excerpt'))
                            <div class="invalid-feedback">
                                {{ $errors->first('excerpt') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.whatWeDo.fields.excerpt_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="page_text" class="text-xs required ">{{ trans('cruds.whatWeDo.fields.page_text') }}</label>
                    <div class="form-group">
                        
                        <textarea class="form-control ckeditor {{ $errors->has('page_text') ? 'is-invalid' : '' }}" name="page_text" id="page_text">{!! old('page_text', $whatWeDo->page_text) !!}</textarea>
                        @if($errors->has('page_text'))
                            <div class="invalid-feedback">
                                {{ $errors->first('page_text') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.whatWeDo.fields.page_text_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="featured_image" class="text-xs required ">{{ trans('cruds.whatWeDo.fields.featured_image') }}</label>
                    <div class="form-group">
                        
                        <div class="needsclick dropzone {{ $errors->has('featured_image') ? 'is-invalid' : '' }}" id="featured_image-dropzone">
                        </div>
                        @if($errors->has('featured_image'))
                            <div class="invalid-feedback">
                                {{ $errors->first('featured_image') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.whatWeDo.fields.featured_image_helper') }}</span>
                    </div>
                <div>
                <div class="mb-3">
                    <label for="logo" class="text-xs required ">Title Image</label>
                    <div class="form-group">
                        
                        <input type="file" name="title_image" class="form-control" value="{{$whatWeDo->title_image}}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="cta_button_text" class="text-xs required ">{{ trans('cruds.whatWeDo.fields.cta_button_text') }}</label>        
                    <div class="form-group">
                        
                        <input class="form-control {{ $errors->has('cta_button_text') ? 'is-invalid' : '' }}" type="text" name="cta_button_text" id="cta_button_text" value="{{ old('cta_button_text', $whatWeDo->cta_button_text) }}">
                        @if($errors->has('cta_button_text'))
                            <div class="invalid-feedback">
                                {{ $errors->first('cta_button_text') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.whatWeDo.fields.cta_button_text_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    
                        <div class="form-check {{ $errors->has('featured') ? 'is-invalid' : '' }}">
                            <input type="hidden" name="featured" value="0">
                            <input class="form-check-input" type="checkbox" name="featured" id="featured" value="1" {{ $whatWeDo->featured || old('featured', 0) === 1 ? 'checked' : '' }}>
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
                    <label for="cta_url" class="text-xs required ">{{ trans('cruds.whatWeDo.fields.cta_url') }}</label>
                    <div class="form-group">
                        
                        <input class="form-control {{ $errors->has('cta_url') ? 'is-invalid' : '' }}" type="text" name="cta_url" id="cta_url" value="{{ old('cta_url', $whatWeDo->cta_url) }}">
                        @if($errors->has('cta_url'))
                            <div class="invalid-feedback">
                                {{ $errors->first('cta_url') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.whatWeDo.fields.cta_url_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="case_study_id" class="text-xs required ">{{ trans('cruds.whatWeDo.fields.case_study') }}</label>
                    <div class="form-group">
                        
                        <select class="form-control select2 {{ $errors->has('case_study') ? 'is-invalid' : '' }}" name="case_study_id" id="case_study_id">
                            @foreach($case_studies as $id => $entry)
                                <option value="{{ $id }}" {{ (old('case_study_id') ? old('case_study_id') : $whatWeDo->case_study->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('case_study'))
                            <div class="invalid-feedback">
                                {{ $errors->first('case_study') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.whatWeDo.fields.case_study_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="text-xs required ">{{ trans('cruds.whatWeDo.fields.status') }}</label>
                    <div class="form-group">
                        
                        <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                            <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                            @foreach(App\Models\WhatWeDo::STATUS_SELECT as $key => $label)
                                <option value="{{ $key }}" {{ old('status', $whatWeDo->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('status'))
                            <div class="invalid-feedback">
                                {{ $errors->first('status') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.whatWeDo.fields.status_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="slug" class="text-xs required ">{{ trans('cruds.whatWeDo.fields.slug') }}</label>
                    <div class="form-group">
                        
                        <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', $whatWeDo->slug) }}">
                        @if($errors->has('slug'))
                            <div class="invalid-feedback">
                                {{ $errors->first('slug') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.whatWeDo.fields.slug_helper') }}</span>
                    </div>
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
                xhr.open('POST', '{{ route('admin.what-we-dos.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $whatWeDo->id ?? 0 }}');
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
    url: '{{ route('admin.what-we-dos.storeMedia') }}',
    maxFilesize: 25, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif,.svg',
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
@if(isset($whatWeDo) && $whatWeDo->featured_image)
      var file = {!! json_encode($whatWeDo->featured_image) !!}
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
    Dropzone.options.logoDropzone = {
    url: '{{ route('admin.what-we-dos.storeMedia') }}',
    maxFilesize: 4, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif',
    maxFiles: 1,
    addRemoveLinks: true,
    headers: {
      'X-CSRF-TOKEN': "{{ csrf_token() }}"
    },
    params: {
      size: 4,
      width: 4096,
      height: 4096
    },
    success: function (file, response) {
      $('form').find('input[name="title_image"]').remove()
      $('form').append('<input type="hidden" name="title_image" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="title_image"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($whatWeDo) && $whatWeDo->title_image)
      var file = {!! json_encode($whatWeDo->title_image) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="title_image" value="' + file.file_name + '">')
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
