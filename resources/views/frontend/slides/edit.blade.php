@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.slide.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.slides.update", [$slide->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="title">{{ trans('cruds.slide.fields.title') }}</label>
                            <input class="form-control" type="text" name="title" id="title" value="{{ old('title', $slide->title) }}" required>
                            @if($errors->has('title'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('title') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.slide.fields.title_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="image">{{ trans('cruds.slide.fields.image') }}</label>
                            <div class="needsclick dropzone" id="image-dropzone">
                            </div>
                            @if($errors->has('image'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('image') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.slide.fields.image_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="imagetitle">{{ trans('cruds.slide.fields.imagetitle') }}</label>
                            <input class="form-control" type="text" name="imagetitle" id="imagetitle" value="{{ old('imagetitle', $slide->imagetitle) }}">
                            @if($errors->has('imagetitle'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('imagetitle') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.slide.fields.imagetitle_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="description">{{ trans('cruds.slide.fields.description') }}</label>
                            <textarea class="form-control" name="description" id="description">{{ old('description', $slide->description) }}</textarea>
                            @if($errors->has('description'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('description') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.slide.fields.description_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="cta_button">{{ trans('cruds.slide.fields.cta_button') }}</label>
                            <input class="form-control" type="text" name="cta_button" id="cta_button" value="{{ old('cta_button', $slide->cta_button) }}">
                            @if($errors->has('cta_button'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('cta_button') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.slide.fields.cta_button_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="url">{{ trans('cruds.slide.fields.url') }}</label>
                            <input class="form-control" type="text" name="url" id="url" value="{{ old('url', $slide->url) }}">
                            @if($errors->has('url'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('url') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.slide.fields.url_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('cruds.slide.fields.status') }}</label>
                            <select class="form-control" name="status" id="status">
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
                            <select class="form-control select2" name="slider_id" id="slider_id" required>
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
                        <div class="form-group">
                            <label for="parent_id">{{ trans('cruds.slide.fields.parent') }}</label>
                            <select class="form-control select2" name="parent_id" id="parent_id">
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
                        <div class="form-group">
                            <label for="slidesid_id">{{ trans('cruds.slide.fields.slidesid') }}</label>
                            <select class="form-control select2" name="slidesid_id" id="slidesid_id">
                                @foreach($slidesids as $id => $entry)
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
@endsection

@section('scripts')
<script>
    Dropzone.options.imageDropzone = {
    url: '{{ route('frontend.slides.storeMedia') }}',
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