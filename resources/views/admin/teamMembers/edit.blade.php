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
               {{ trans('global.edit') }} {{ trans('cruds.teamMember.title_singular') }}
              </h3>
            </div>
          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-blueGray-100">
             <form method="POST" action="{{ route("admin.team-members.update", [$teamMember->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group mb-3">
                <label class="required" for="name">{{ trans('cruds.teamMember.fields.name') }}</label>
                <input class=" form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $teamMember->name) }}" required>
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.teamMember.fields.name_helper') }}</span>
            </div>
            <div class="form-group mb-3">
                <label for="subheading">{{ trans('cruds.teamMember.fields.subheading') }}</label>
                <input class=" form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('subheading') ? 'is-invalid' : '' }}" type="text" name="subheading" id="subheading" value="{{ old('subheading', $teamMember->subheading) }}">
                @if($errors->has('subheading'))
                    <div class="invalid-feedback">
                        {{ $errors->first('subheading') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.teamMember.fields.subheading_helper') }}</span>
            </div>
            <div class="form-group mb-3">
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
            <div class="form-group mb-3">
                <label for="content">{{ trans('cruds.teamMember.fields.content') }}</label>
                <textarea class=" form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 rows="4" cols="166" {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content" id="content">{{ old('content', $teamMember->content) }}</textarea>
                @if($errors->has('content'))
                    <div class="invalid-feedback">
                        {{ $errors->first('content') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.teamMember.fields.content_helper') }}</span>
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