@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.location.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.locations.update", [$location->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="location_country">{{ trans('cruds.location.fields.location_country') }}</label>
                            <input class="form-control" type="text" name="location_country" id="location_country" value="{{ old('location_country', $location->location_country) }}">
                            @if($errors->has('location_country'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('location_country') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.location.fields.location_country_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="location_phone">{{ trans('cruds.location.fields.location_phone') }}</label>
                            <input class="form-control" type="text" name="location_phone" id="location_phone" value="{{ old('location_phone', $location->location_phone) }}">
                            @if($errors->has('location_phone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('location_phone') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.location.fields.location_phone_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="location_address">{{ trans('cruds.location.fields.location_address') }}</label>
                            <textarea class="form-control" name="location_address" id="location_address">{{ old('location_address', $location->location_address) }}</textarea>
                            @if($errors->has('location_address'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('location_address') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.location.fields.location_address_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="location_addlink">{{ trans('cruds.location.fields.location_addlink') }}</label>
                            <input class="form-control" type="text" name="location_addlink" id="location_addlink" value="{{ old('location_addlink', $location->location_addlink) }}">
                            @if($errors->has('location_addlink'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('location_addlink') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.location.fields.location_addlink_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="orderby">{{ trans('cruds.location.fields.orderby') }}</label>
                            <input class="form-control" type="number" name="orderby" id="orderby" value="{{ old('orderby', $location->orderby) }}" step="1">
                            @if($errors->has('orderby'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('orderby') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.location.fields.orderby_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="contact_info_id">{{ trans('cruds.location.fields.contact_info') }}</label>
                            <select class="form-control select2" name="contact_info_id" id="contact_info_id">
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