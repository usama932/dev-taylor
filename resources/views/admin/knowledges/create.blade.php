@extends('layouts.admin')
@section('content')

<div class="main-card">
    <div class="header">
        {{ trans('global.create') }} {{ trans('cruds.knowledge.title_singular') }}
    </div>

   
        <form method="POST" action="{{ route("admin.knowledges.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="body">
                <div class="mb-3">
                    <div class="form-group">
                        <label class="text-xs required" for="name">{{ trans('cruds.knowledge.fields.name') }}</label>
                        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.knowledge.fields.name_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="description" class="text-xs required">{{ trans('cruds.knowledge.fields.description') }}</label>
                        <textarea class="form-control {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description') }}</textarea>
                        @if($errors->has('description'))
                            <div class="invalid-feedback">
                                {{ $errors->first('description') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.knowledge.fields.description_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="content" class="text-xs required">{{ trans('cruds.knowledge.fields.content') }}</label>
                        <textarea class="form-control ckeditor {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content" id="content">{!! old('content') !!}</textarea>
                        @if($errors->has('content'))
                            <div class="invalid-feedback">
                                {{ $errors->first('content') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.knowledge.fields.content_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="category_id" class="text-xs required">{{ trans('cruds.knowledge.fields.category') }}</label>
                        <select class="form-control select2 {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category_id" id="category_id">
                            @foreach($categories as $id => $entry)
                                <option value="{{ $id }}" {{ old('category_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('category'))
                            <div class="invalid-feedback">
                                {{ $errors->first('category') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.knowledge.fields.category_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="tag_id" class="text-xs required">{{ trans('cruds.knowledge.fields.tag') }}</label>
                        <select class="form-control select2 {{ $errors->has('tag') ? 'is-invalid' : '' }}" name="tag_id" id="tag_id">
                            @foreach($tags as $id => $entry)
                                <option value="{{ $id }}" {{ old('tag_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('tag'))
                            <div class="invalid-feedback">
                                {{ $errors->first('tag') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.knowledge.fields.tag_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label class="text-xs required">{{ trans('cruds.knowledge.fields.status') }}</label>
                        <select class="form-control {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                            <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                            @foreach(App\Models\Knowledge::STATUS_SELECT as $key => $label)
                                <option value="{{ $key }}" {{ old('status', '0') === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('status'))
                            <div class="invalid-feedback">
                                {{ $errors->first('status') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.knowledge.fields.status_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="publish_date" class="text-xs required">{{ trans('cruds.knowledge.fields.publish_date') }}</label>
                        <input class="form-control datetime {{ $errors->has('publish_date') ? 'is-invalid' : '' }}" type="text" name="publish_date" id="publish_date" value="{{ old('publish_date') }}">
                        @if($errors->has('publish_date'))
                            <div class="invalid-feedback">
                                {{ $errors->first('publish_date') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.knowledge.fields.publish_date_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="slug" class="text-xs required">{{ trans('cruds.knowledge.fields.slug') }}</label>
                        <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', '') }}">
                        @if($errors->has('slug'))
                            <div class="invalid-feedback">
                                {{ $errors->first('slug') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.knowledge.fields.slug_helper') }}</span>
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
                xhr.open('POST', '{{ route('admin.knowledges.storeCKEditorImages') }}', true);
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
                data.append('crud_id', '{{ $knowledge->id ?? 0 }}');
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