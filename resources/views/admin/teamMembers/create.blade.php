@extends('layouts.admin')
@section('content')

<div class="main-card">
    <div class="header">
        {{ trans('global.create') }} {{ trans('cruds.teamMember.title_singular') }}
    </div>

    <div class="body">
        <form method="POST" action="{{ route("admin.team-members.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
            <div class="form-group">
                <label class="required" for="name">{{ trans('cruds.teamMember.fields.name') }}</label>
                <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.teamMember.fields.name_helper') }}</span>
            </div>
            </div>
            <div class="mb-3">
            <div class="form-group">
                <label for="subheading">{{ trans('cruds.teamMember.fields.subheading') }}</label>
                <input class="form-control {{ $errors->has('subheading') ? 'is-invalid' : '' }}" type="text" name="subheading" id="subheading" value="{{ old('subheading', '') }}">
                @if($errors->has('subheading'))
                    <div class="invalid-feedback">
                        {{ $errors->first('subheading') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.teamMember.fields.subheading_helper') }}</span>
            </div>
            </div>
            <div class="mb-3">
            <div class="form-group">
                <label for="image">{{ trans('cruds.teamMember.fields.image') }}</label>
                <div class="needsclick dropzone {{ $errors->has('image') ? 'is-invalid' : '' }}" id="image-dropzone">
                </div>
                @if($errors->has('image'))
                    <div class="invalid-feedback">
                        {{ $errors->first('image') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.teamMember.fields.image_helper') }}</span>
            </div>
            </div>
            <div class="mb-3">
            <div class="form-group">
                <label for="content">{{ trans('cruds.teamMember.fields.content') }}</label>
                <textarea class="form-control  rows="4" cols="166" {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content" id="content">{{ old('content') }}</textarea>
                @if($errors->has('content'))
                    <div class="invalid-feedback">
                        {{ $errors->first('content') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.teamMember.fields.content_helper') }}</span>
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
</div>



@endsection

@section('scripts')
<script>
    Dropzone.options.imageDropzone = {
    url: '{{ route('admin.team-members.storeMedia') }}',
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
@if(isset($teamMember) && $teamMember->image)
      var file = {!! json_encode($teamMember->image) !!}
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