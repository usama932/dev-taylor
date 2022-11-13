@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.company.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.companies.update", [$company->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="company_name">{{ trans('cruds.company.fields.company_name') }}</label>
                            <input class="form-control" type="text" name="company_name" id="company_name" value="{{ old('company_name', $company->company_name) }}">
                            @if($errors->has('company_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('company_name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.company.fields.company_name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="company_email">{{ trans('cruds.company.fields.company_email') }}</label>
                            <input class="form-control" type="text" name="company_email" id="company_email" value="{{ old('company_email', $company->company_email) }}">
                            @if($errors->has('company_email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('company_email') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.company.fields.company_email_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="companylogo">{{ trans('cruds.company.fields.companylogo') }}</label>
                            <div class="needsclick dropzone" id="companylogo-dropzone">
                            </div>
                            @if($errors->has('companylogo'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('companylogo') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.company.fields.companylogo_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="linkedin">{{ trans('cruds.company.fields.linkedin') }}</label>
                            <input class="form-control" type="text" name="linkedin" id="linkedin" value="{{ old('linkedin', $company->linkedin) }}">
                            @if($errors->has('linkedin'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('linkedin') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.company.fields.linkedin_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="facebook">{{ trans('cruds.company.fields.facebook') }}</label>
                            <input class="form-control" type="text" name="facebook" id="facebook" value="{{ old('facebook', $company->facebook) }}">
                            @if($errors->has('facebook'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('facebook') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.company.fields.facebook_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="twitter">{{ trans('cruds.company.fields.twitter') }}</label>
                            <input class="form-control" type="text" name="twitter" id="twitter" value="{{ old('twitter', $company->twitter) }}">
                            @if($errors->has('twitter'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('twitter') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.company.fields.twitter_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="other">{{ trans('cruds.company.fields.other') }}</label>
                            <input class="form-control" type="text" name="other" id="other" value="{{ old('other', $company->other) }}">
                            @if($errors->has('other'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('other') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.company.fields.other_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="company_info_id">{{ trans('cruds.company.fields.company_info') }}</label>
                            <select class="form-control select2" name="company_info_id" id="company_info_id">
                                @foreach($company_infos as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('company_info_id') ? old('company_info_id') : $company->company_info->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
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

        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    Dropzone.options.companylogoDropzone = {
    url: '{{ route('frontend.companies.storeMedia') }}',
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