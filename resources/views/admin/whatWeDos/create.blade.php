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
               {{ trans('global.create') }} {{ trans('cruds.whatWeDo.title_singular') }}
              </h3>
            </div>
          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-blueGray-100">
            <form method="POST" action="{{ route("admin.what-we-dos.store") }}" enctype="multipart/form-data">
                @csrf
                <div class="body">
                    <div class="mb-3 mt-3">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2" for="title">{{ trans('cruds.whatWeDo.fields.title') }}</label>
                        <div class="form-group">
                            <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.whatWeDo.fields.title_helper') }}</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="excerpt" class="block uppercase text-blueGray-600 text-xs font-bold mb-2 ">{{ trans('cruds.whatWeDo.fields.excerpt') }}</label>
                        <div class="form-group">
                            
                            <textarea class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 rows="4" cols="160" {{ $errors->has('excerpt') ? 'is-invalid' : '' }}" name="excerpt" id="excerpt">{{ old('excerpt') }}</textarea>
                            @if($errors->has('excerpt'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('excerpt') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.whatWeDo.fields.excerpt_helper') }}</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="page_text" class="block uppercase text-blueGray-600 text-xs font-bold mb-2 ">{{ trans('cruds.whatWeDo.fields.page_text') }}</label>
                        <div class="form-group">
                            
                            <textarea class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 ckeditor {{ $errors->has('page_text') ? 'is-invalid' : '' }}" name="page_text" id="page_text">{!! old('page_text') !!}</textarea>
                            @if($errors->has('page_text'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('page_text') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.whatWeDo.fields.page_text_helper') }}</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="featured_image" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.whatWeDo.fields.featured_image') }}</label>
                        <div class="form-group">
                            
                            <div class="needsclick dropzone {{ $errors->has('featured_image') ? 'is-invalid' : '' }}" id="featured_image-dropzone">
                            </div>
                            {{-- <button type="button" class="btn btn-primary btn-sm mt-2" data-toggle="modal" data-target="#exampleModal">
                                Choose from gallery
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Choose Image</h5>
                                            <button type="button" class=" btn-sm btn-indigo close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                        <div class="row">
                                        @foreach ($medias as $media)
                                        <div class="col-md-3 m-2"> 
                                            <label>
                                                <input type="radio" name="featured_image2" value="{{$media->file_name}}" >
                                                <img src="{{$media->getUrl('thumb')}}" style="width:110px; height:auto;" >
                                            </label>
                                        </div>
                                        @endforeach
                                            </div>
                                        <button type="button" class="bbtn-sm btn-indigo" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            @if($errors->has('featured_image'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('featured_image') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.whatWeDo.fields.featured_image_helper') }}</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="logo">Title Image</label>
                        <div class="form-group">
                        <input type="file" name="title_image" class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="">
                            
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="cta_button_text">{{ trans('cruds.whatWeDo.fields.cta_button_text') }}</label>
                            <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('cta_button_text') ? 'is-invalid' : '' }}" type="text" name="cta_button_text" id="cta_button_text" value="{{ old('cta_button_text', '') }}">
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
                        <label for="cta_url" class="text-xs required ">{{ trans('cruds.whatWeDo.fields.cta_url') }}</label>
                        <div class="form-group">
                            
                            <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('cta_url') ? 'is-invalid' : '' }}" type="text" name="cta_url" id="cta_url" value="{{ old('cta_url', '') }}">
                            @if($errors->has('cta_url'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cta_url') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.whatWeDo.fields.cta_url_helper') }}</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <div class="form-group">
                            <label for="case_study_id">{{ trans('cruds.whatWeDo.fields.case_study') }}</label>
                            <select class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 select2 {{ $errors->has('case_study') ? 'is-invalid' : '' }}" name="case_study_id" id="case_study_id">
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
                    </div>
                    <div class="mb-3">
                        <label class="text-xs required ">{{ trans('cruds.whatWeDo.fields.status') }}</label>
                        <div class="form-group">
                            
                            <select class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
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
                    </div>
                    <div class="mb-3">
                        <label for="slug" class="text-xs required ">{{ trans('cruds.whatWeDo.fields.slug') }}</label>
                        <div class="form-group">
                            
                            <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', '') }}">
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
    maxFilesize: 25, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif,.svg,.json',
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


@endsection
