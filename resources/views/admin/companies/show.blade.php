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
               {{ trans('global.show') }} {{ trans('cruds.company.title') }}
              </h3>
            </div>
          </div>
          
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0 " style="background-color:#F0F4F8 !important">
           <form method="POST" action="{{ route("admin.companies.update", [$company->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3 mt-3">
                <div class="form-group">
                    <label for="company_name" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.company.fields.company_name') }}</label>
                    <input readonly class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('company_name') ? 'is-invalid' : '' }}" type="text" name="company_name" id="company_name" value="{{ old('company_name', $company->company_name) }}">
                    @if($errors->has('company_name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('company_name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.company.fields.company_name_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="company_email" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.company.fields.company_email') }}</label>
                    <input readonly class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('company_email') ? 'is-invalid' : '' }}" type="text" name="company_email" id="company_email" value="{{ old('company_email', $company->company_email) }}">
                    @if($errors->has('company_email'))
                        <div class="invalid-feedback">
                            {{ $errors->first('company_email') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.company.fields.company_email_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="companylogo" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.company.fields.companylogo') }}</label>
                    <div class="needsclick  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 dropzone {{ $errors->has('companylogo') ? 'is-invalid' : '' }}" id="companylogo-dropzone">
                    </div>
                    @if($errors->has('companylogo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('companylogo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.company.fields.companylogo_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="linkedin" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.company.fields.linkedin') }}</label>
                    <input readonly class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('linkedin') ? 'is-invalid' : '' }}" type="text" name="linkedin" id="linkedin" value="{{ old('linkedin', $company->linkedin) }}">
                    @if($errors->has('linkedin'))
                        <div class="invalid-feedback">
                            {{ $errors->first('linkedin') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.company.fields.linkedin_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="facebook" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.company.fields.facebook') }}</label>
                    <input readonly class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('facebook') ? 'is-invalid' : '' }}" type="text" name="facebook" id="facebook" value="{{ old('facebook', $company->facebook) }}">
                    @if($errors->has('facebook'))
                        <div class="invalid-feedback">
                            {{ $errors->first('facebook') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.company.fields.facebook_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="twitter" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.company.fields.twitter') }}</label>
                    <input readonly class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('twitter') ? 'is-invalid' : '' }}" type="text" name="twitter" id="twitter" value="{{ old('twitter', $company->twitter) }}">
                    @if($errors->has('twitter'))
                        <div class="invalid-feedback">
                            {{ $errors->first('twitter') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.company.fields.twitter_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="other" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.company.fields.other') }}</label>
                    <input readonly class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('other') ? 'is-invalid' : '' }}" type="text" name="other" id="other" value="{{ old('other', $company->other) }}">
                    @if($errors->has('other'))
                        <div class="invalid-feedback">
                            {{ $errors->first('other') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.company.fields.other_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="company_info_id" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.company.fields.company_info') }}</label>
                    <select class="form-control border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150select2 {{ $errors->has('company_info') ? 'is-invalid' : '' }}" name="company_info_id" id="company_info_id">
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
            </div>
            {{-- <div class="mb-3">
                <div class="form-group">
                    <button class="btn btn-indigo mr-2" type="submit">
                        Save
                    </button>
                </div>
            </div> --}}
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection