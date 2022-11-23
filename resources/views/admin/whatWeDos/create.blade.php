@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.whatWeDo.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.what-we-dos.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label class="required" for="title">{{ trans('cruds.whatWeDo.fields.title') }}</label>
                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.whatWeDo.fields.title_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="excerpt">{{ trans('cruds.whatWeDo.fields.excerpt') }}</label>
                <textarea class="form-control {{ $errors->has('excerpt') ? 'is-invalid' : '' }}" name="excerpt" id="excerpt">{{ old('excerpt') }}</textarea>
                @if($errors->has('excerpt'))
                    <div class="invalid-feedback">
                        {{ $errors->first('excerpt') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.whatWeDo.fields.excerpt_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="page_text">{{ trans('cruds.whatWeDo.fields.page_text') }}</label>
                <textarea class="form-control ckeditor {{ $errors->has('page_text') ? 'is-invalid' : '' }}" name="page_text" id="page_text">{!! old('page_text') !!}</textarea>
                @if($errors->has('page_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('page_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.whatWeDo.fields.page_text_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="featured_image">{{ trans('cruds.whatWeDo.fields.featured_image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('featured_image') ? 'is-invalid' : '' }}" id="featured_image-dropzone">
                </div>
                @if($errors->has('featured_image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('featured_image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.whatWeDo.fields.featured_image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="featured_image">Title Image</label>
                    <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                    </div>
                    =
                     {{-- <input type="file" name="image" class="form-control"> --}}
                     @if($errors->has('image'))
                     <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                     </div>
                     @endif
                     <span class="help-block">{{ trans('cruds.whatWeDo.fields.image_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="cta_button_text">{{ trans('cruds.whatWeDo.fields.cta_button_text') }}</label>
                <input class="form-control {{ $errors->has('cta_button_text') ? 'is-invalid' : '' }}" type="text" name="cta_button_text" id="cta_button_text" value="{{ old('cta_button_text', '') }}">
                @if($errors->has('cta_button_text'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cta_button_text') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.whatWeDo.fields.cta_button_text_helper') }}</span>
            </div>
            <div class="form-group">
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
            <div class="form-group">
                <label for="cta_url">{{ trans('cruds.whatWeDo.fields.cta_url') }}</label>
                <input class="form-control {{ $errors->has('cta_url') ? 'is-invalid' : '' }}" type="text" name="cta_url" id="cta_url" value="{{ old('cta_url', '') }}">
                @if($errors->has('cta_url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cta_url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.whatWeDo.fields.cta_url_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="case_study_id">{{ trans('cruds.whatWeDo.fields.case_study') }}</label>
                <select class="form-control select2 {{ $errors->has('case_study') ? 'is-invalid' : '' }}" name="case_study_id" id="case_study_id">
                    @foreach($case_studies as $id => $entry)
                        <option value="{{ $id }}" {{ old('case_study_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('case_study'))
                    <div class="invalid-feedback">
                        {{ $errors->first('case_study') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.whatWeDo.fields.case_study_helper') }}</span>
            </div>
            <div class="form-group">
                <label>{{ trans('cruds.whatWeDo.fields.status') }}</label>
                <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                    <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                    @foreach(App\Models\WhatWeDo::STATUS_SELECT as $key => $label)
                        <option value="{{ $key }}" {{ old('status', '') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                    @endforeach
                </select>
                @if($errors->has('status'))
                    <div class="invalid-feedback">
                        {{ $errors->first('status') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.whatWeDo.fields.status_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="slug">{{ trans('cruds.whatWeDo.fields.slug') }}</label>
                <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', '') }}">
                @if($errors->has('slug'))
                    <div class="invalid-feedback">
                        {{ $errors->first('slug') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.whatWeDo.fields.slug_helper') }}</span>
            </div>
            <div class="form-group">
                <button class="btn btn-danger" type="submit">
                    {{ trans('global.save') }}
                </button>
            </div>
        </form>
    </div>
</div>



@endsection

@section('scripts')
<script>
    $(document).ready(function () {
function coloumns(editor){
    editor.ui.componentFactory.add( 'timestamp', () => {
        //...

        // Execute a callback function when the button is clicked.
        button.on( 'execute', () => {
            const now = new Date();

            // Change the model using the model writer.
            editor.model.change( writer => {

                // Insert the text at the user's current position.
                editor.model.insertContent( writer.createText( now.toString() ) );
            } );
        } );

        return button;
    } );
}
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
        extraPlugins: [SimpleUploadAdapter,coloumns],
        toolbar: [
            'coloumns'
        ]
      }
      
    );
    
  }
});
</script>

<script>
    Dropzone.options.featuredImageDropzone = {
    url: '{{ route('admin.what-we-dos.storeMedia') }}',
    maxFilesize: 10, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif,.json',
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
   Dropzone.options.imageDropzone = {
   url: '{{ route('admin.what-we-dos.storeMedia') }}',
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
   @if(isset($whatWeDo) && $whatWeDo->image)
     var file = {!! json_encode($whatWeDo->image) !!}
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
