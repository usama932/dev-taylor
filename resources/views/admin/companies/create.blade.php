@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.create') }} {{ trans('cruds.company.title_singular') }}
    </div>

    <div class="card-body">
        <form method="POST" action="{{ route("admin.companies.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="company_name">{{ trans('cruds.company.fields.company_name') }}</label>
                <input class="form-control {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', '') }}">
                @if($errors->has('company_name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.company_name_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_email">{{ trans('cruds.company.fields.company_email') }}</label>
                <input class="form-control {{ $errors->has('company_email') ? 'is-invalid' : '' }}" type="text" name="company_email" id="company_email" value="{{ old('company_email', '') }}">
                @if($errors->has('company_email'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_email') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.company_email_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="companylogo">{{ trans('cruds.company.fields.companylogo') }}</label>
                <input type="file" class="form-control" name="companylogo">
                {{-- <div class="needsclick dropzone {{ $errors->has('companylogo') ? 'is-invalid' : '' }}" id="companylogo-dropzone">
                </div> --}}
                @if($errors->has('companylogo'))
                    <div class="invalid-feedback">
                        {{ $errors->first('companylogo') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.companylogo_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="linkedin">{{ trans('cruds.company.fields.linkedin') }}</label>
                <input class="form-control {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" type="text" name="linkedin" id="linkedin" value="{{ old('linkedin', '') }}">
                @if($errors->has('linkedin'))
                    <div class="invalid-feedback">
                        {{ $errors->first('linkedin') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.linkedin_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="facebook">{{ trans('cruds.company.fields.facebook') }}</label>
                <input class="form-control {{ $errors->has('facebook') ? 'is-invalid' : '' }}" type="text" name="facebook" id="facebook" value="{{ old('facebook', '') }}">
                @if($errors->has('facebook'))
                    <div class="invalid-feedback">
                        {{ $errors->first('facebook') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.facebook_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="twitter">{{ trans('cruds.company.fields.twitter') }}</label>
                <input class="form-control {{ $errors->has('twitter') ? 'is-invalid' : '' }}" type="text" name="twitter" id="twitter" value="{{ old('twitter', '') }}">
                @if($errors->has('twitter'))
                    <div class="invalid-feedback">
                        {{ $errors->first('twitter') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.twitter_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="other">{{ trans('cruds.company.fields.other') }}</label>
                <input class="form-control {{ $errors->has('other') ? 'is-invalid' : '' }}" type="text" name="other" id="other" value="{{ old('other', '') }}">
                @if($errors->has('other'))
                    <div class="invalid-feedback">
                        {{ $errors->first('other') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.other_helper') }}</span>
            </div>
            <div class="form-group">
                <label for="company_info_id">{{ trans('cruds.company.fields.company_info') }}</label>
                <select class="form-control select2 {{ $errors->has('company_info') ? 'is-invalid' : '' }}" name="company_info_id" id="company_info_id">
                    @foreach($company_infos as $id => $entry)
                        <option value="{{ $id }}" {{ old('company_info_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('company_info'))
                    <div class="invalid-feedback">
                        {{ $errors->first('company_info') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.company.fields.company_info_helper') }}</span>
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
    Dropzone.options.companylogoDropzone = {
    url: '{{ route('admin.companies.storeMedia') }}',
    maxFilesize: 10, // MB
    acceptedFiles: '.jpeg,.jpg,.png,.gif,.svg,.json',
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
      $('form').find('input[name="companylogo"]').remove()
      $('form').append('<input type="hidden" name="companylogo" value="' + response.name + '">')
    },
    removedfile: function (file) {
      file.previewElement.remove()
      if (file.status !== 'error') {
        $('form').find('input[name="companylogo"]').remove()
        this.options.maxFiles = this.options.maxFiles + 1
      }
    },
    init: function () {
@if(isset($company) && $company->companylogo)
      var file = {!! json_encode($company->companylogo) !!}
          this.options.addedfile.call(this, file)
      this.options.thumbnail.call(this, file, file.preview ?? file.preview_url)
      file.previewElement.classList.add('dz-complete')
      $('form').append('<input type="hidden" name="companylogo" value="' + file.file_name + '">')
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
