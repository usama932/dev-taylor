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
                {{ trans('global.edit') }} {{ trans('cruds.knowledge.title_singular') }}
              </h3>
            </div>
          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-blueGray-100" style="background-color:#F0F4F8 !important" >
 
             <form method="POST" action="{{ route("admin.knowledges.update", [$knowledge->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="body" >
                <div class="mb-3 mt-3">
                    <div class="form-group">
                        <label class=" block uppercase text-blueGray-600 text-xs font-bold mb-2 required" for="name">{{ trans('cruds.knowledge.fields.name') }}</label>
                        <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $knowledge->name) }}" required>
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
                        <label for="description" class=" block uppercase text-blueGray-600 text-xs font-bold mb-2 required">{{ trans('cruds.knowledge.fields.description') }}</label>
                        <textarea class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 rows="4" cols="166" {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description', $knowledge->description) }}</textarea>
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
                        <label for="content" class=" block uppercase text-blueGray-600 text-xs font-bold mb-2 required">{{ trans('cruds.knowledge.fields.content') }}</label>
                        <textarea class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 ckeditor {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content" id="content">{!! old('content', $knowledge->content) !!}</textarea>
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
                        <label for="category_id" class=" block uppercase text-blueGray-600 text-xs font-bold mb-2 required">{{ trans('cruds.knowledge.fields.category') }}</label>
                        <select class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 select2 {{ $errors->has('category') ? 'is-invalid' : '' }}" name="category_id" id="category_id">
                            @foreach($categories as $id => $entry)
                                <option value="{{ $id }}" {{ (old('category_id') ? old('category_id') : $knowledge->category->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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
                        <label for="tag_id" class=" block uppercase text-blueGray-600 text-xs font-bold mb-2 required">{{ trans('cruds.knowledge.fields.tag') }}</label>
                        <select class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 select2 {{ $errors->has('tag') ? 'is-invalid' : '' }}" name="tag_id" id="tag_id">
                            @foreach($tags as $id => $entry)
                                <option value="{{ $id }}" {{ (old('tag_id') ? old('tag_id') : $knowledge->tag->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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
                        <label class=" block uppercase text-blueGray-600 text-xs font-bold mb-2 required">{{ trans('cruds.knowledge.fields.status') }}</label>
                        <select class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                            <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                            @foreach(App\Models\Knowledge::STATUS_SELECT as $key => $label)
                                <option value="{{ $key }}" {{ old('status', $knowledge->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
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
                        <label for="publish_date" class=" block uppercase text-blueGray-600 text-xs font-bold mb-2 required">{{ trans('cruds.knowledge.fields.publish_date') }}</label>
                        <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 datetime {{ $errors->has('publish_date') ? 'is-invalid' : '' }}" type="text" name="publish_date" id="publish_date" value="{{ old('publish_date', $knowledge->publish_date) }}">
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
                        <label for="slug" class=" block uppercase text-blueGray-600 text-xs font-bold mb-2 required">{{ trans('cruds.knowledge.fields.slug') }}</label>
                        <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', $knowledge->slug) }}">
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
                <button class="btn btn-indigo mr-2" type="submit">
                  Save
                </button>
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