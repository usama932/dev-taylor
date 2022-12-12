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
              {{ trans('global.edit') }} {{ trans('cruds.location.title_singular') }}
              </h3>
            </div>
          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-blueGray-100">
            <form method="POST" action="{{ route("admin.locations.update", [$location->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group mb-3 mt-3">
                <label for="location_country" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.location.fields.location_country') }}</label>
                <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('location_country') ? 'is-invalid' : '' }}" type="text" name="location_country" id="location_country" value="{{ old('location_country', $location->location_country) }}">
                @if($errors->has('location_country'))
                    <div class="invalid-feedback">
                        {{ $errors->first('location_country') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.location.fields.location_country_helper') }}</span>
            </div>
            <div class="form-group mb-3">
                <label for="location_phone" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.location.fields.location_phone') }}</label>
                <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('location_phone') ? 'is-invalid' : '' }}" type="text" name="location_phone" id="location_phone" value="{{ old('location_phone', $location->location_phone) }}">
                @if($errors->has('location_phone'))
                    <div class="invalid-feedback">
                        {{ $errors->first('location_phone') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.location.fields.location_phone_helper') }}</span>
            </div>
            <div class="form-group mb-3">
                <label for="location_address" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.location.fields.location_address') }}</label>
                <textarea class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('location_address') ? 'is-invalid' : '' }}" name="location_address" id="location_address">{{ old('location_address', $location->location_address) }}</textarea>
                @if($errors->has('location_address'))
                    <div class="invalid-feedback">
                        {{ $errors->first('location_address') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.location.fields.location_address_helper') }}</span>
            </div>
            <div class="form-group mb-3">
                <label for="location_addlink" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.location.fields.location_addlink') }}</label>
                <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('location_addlink') ? 'is-invalid' : '' }}" type="text" name="location_addlink" id="location_addlink" value="{{ old('location_addlink', $location->location_addlink) }}">
                @if($errors->has('location_addlink'))
                    <div class="invalid-feedback">
                        {{ $errors->first('location_addlink') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.location.fields.location_addlink_helper') }}</span>
            </div>
            <div class="form-group mb-3">
                <label for="orderby" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.location.fields.orderby') }}</label>
                <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('orderby') ? 'is-invalid' : '' }}" type="number" name="orderby" id="orderby" value="{{ old('orderby', $location->orderby) }}" step="1">
                @if($errors->has('orderby'))
                    <div class="invalid-feedback">
                        {{ $errors->first('orderby') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.location.fields.orderby_helper') }}</span>
            </div>
            <div class="form-group mb-3">
                <label for="contact_info_id" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.location.fields.contact_info') }}</label>
                <select class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 select2 {{ $errors->has('contact_info') ? 'is-invalid' : '' }}" name="contact_info_id" id="contact_info_id">
                    @foreach($contact_infos as $id => $entry)
                        <option value="{{ $id }}" {{ (old('contact_info_id') ? old('contact_info_id') : $location->contact_info->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('contact_info'))
                    <div class="invalid-feedback">
                        {{ $errors->first('contact_info') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.location.fields.contact_info_helper') }}</span>
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