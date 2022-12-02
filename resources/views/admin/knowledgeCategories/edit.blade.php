@extends('layouts.admin')
@section('content')

<div class="main-card">
    <div class="header">
        {{ trans('global.edit') }} {{ trans('cruds.knowledgeCategory.title_singular') }}
    </div>

    
        <form method="POST" action="{{ route("admin.knowledge-categories.update", [$knowledgeCategory->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="body">
              <div class="mb-3">
                <div class="form-group">
                    <label class="text-xs required" for="name">{{ trans('cruds.knowledgeCategory.fields.name') }}</label>
                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $knowledgeCategory->name) }}" required>
                    @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.knowledgeCategory.fields.name_helper') }}</span>
                </div>
              </div>
              <div class="mb-3">
                <div class="form-group">
                    <label for="description" class="text-xs required">{{ trans('cruds.knowledgeCategory.fields.description') }}</label>
                    <textarea class="form-control ckeditor {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{!! old('description', $knowledgeCategory->description) !!}</textarea>
                    @if($errors->has('description'))
                        <div class="invalid-feedback">
                            {{ $errors->first('description') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.knowledgeCategory.fields.description_helper') }}</span>
                </div>
              </div>
              <div class="mb-3">
                <div class="form-group">
                    <label for="slug" class="text-xs required">{{ trans('cruds.knowledgeCategory.fields.slug') }}</label>
                    <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', $knowledgeCategory->slug) }}">
                    @if($errors->has('slug'))
                        <div class="invalid-feedback">
                            {{ $errors->first('slug') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.knowledgeCategory.fields.slug_helper') }}</span>
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
                xhr.open('POST', '{{ route('admin.knowledge-categories.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $knowledgeCategory->id ?? 0 }}');
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

@endsection