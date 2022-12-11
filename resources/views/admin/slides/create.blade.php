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
               {{ trans('global.create') }} {{ trans('cruds.slide.title_singular') }}
              </h3>
            </div>
          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-blueGray-100">
             <form method="POST" action="{{ route("admin.slides.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group my-3">
                <label class="required block uppercase text-blueGray-600 text-xs font-bold mb-2" for="title">{{ trans('cruds.slide.fields.title') }}</label>
                <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                @if($errors->has('title'))
                    <div class="invalid-feedback">
                        {{ $errors->first('title') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.slide.fields.title_helper') }}</span>
            </div>
            <div class="form-group mb-3">
                <label for="image" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.slide.fields.image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                </div>
                @if($errors->has('image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.slide.fields.image_helper') }}</span>
            </div>
            <div class="form-group mb-3">
                <label for="imagetitle" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.slide.fields.imagetitle') }}</label>
                <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('imagetitle') ? 'is-invalid' : '' }}" type="text" name="imagetitle" id="imagetitle" value="{{ old('imagetitle', '') }}">
                @if($errors->has('imagetitle'))
                    <div class="invalid-feedback">
                        {{ $errors->first('imagetitle') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.slide.fields.imagetitle_helper') }}</span>
            </div>
            <div class="form-group mb-3">
                <label for="description" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.slide.fields.description') }}</label>
                <textarea class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('description') ? 'is-invalid' : '' }}" name="description" id="description">{{ old('description') }}</textarea>
                @if($errors->has('description'))
                    <div class="invalid-feedback">
                        {{ $errors->first('description') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.slide.fields.description_helper') }}</span>
            </div>
            <div class="form-group mb-3">
                <label for="cta_button" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.slide.fields.cta_button') }}</label>
                <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('cta_button') ? 'is-invalid' : '' }}" type="text" name="cta_button" id="cta_button" value="{{ old('cta_button', '') }}">
                @if($errors->has('cta_button'))
                    <div class="invalid-feedback">
                        {{ $errors->first('cta_button') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.slide.fields.cta_button_helper') }}</span>
            </div>
            <div class="form-group mb-3">
                <label for="url" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.slide.fields.url') }}</label>
                <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('url') ? 'is-invalid' : '' }}" type="text" name="url" id="url" value="{{ old('url', '') }}">
                @if($errors->has('url'))
                    <div class="invalid-feedback">
                        {{ $errors->first('url') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.slide.fields.url_helper') }}</span>
            </div>
            <div class="form-group mb-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.slide.fields.status') }}</label>
                <select class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
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
            <div class="form-group mb-3">
                <label class="required block uppercase text-blueGray-600 text-xs font-bold mb-2" for="slider_id">{{ trans('cruds.slide.fields.slider') }}</label>
                <select class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 select2 {{ $errors->has('slider') ? 'is-invalid' : '' }}" name="slider_id" id="slider_id" required>
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
            <div class="form-group mb-3">
                <label for="parent_id" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.slide.fields.parent') }}</label>
                <select class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 select2 {{ $errors->has('parent') ? 'is-invalid' : '' }}" name="parent_id" id="parent_id">
                    @foreach($parents as $id => $entry)
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
            <div class="form-group mb-3">
                <label for="slidesid_id" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.slide.fields.slidesid') }}</label>
                <select class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 select2 {{ $errors->has('slidesid') ? 'is-invalid' : '' }}" name="slidesid_id" id="slidesid_id">
                    @foreach($slidesids as $id => $entry)
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
            <div class="form-group mb-3">
                <button class="btn btn-indigo mr-2" type="submit">
                  Save
                </button>
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