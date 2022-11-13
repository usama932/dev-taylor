@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.location.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.locations.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.location.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $location->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.location.fields.location_country') }}
                                    </th>
                                    <td>
                                        {{ $location->location_country }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.location.fields.location_phone') }}
                                    </th>
                                    <td>
                                        {{ $location->location_phone }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.location.fields.location_address') }}
                                    </th>
                                    <td>
                                        {{ $location->location_address }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.location.fields.location_addlink') }}
                                    </th>
                                    <td>
                                        {{ $location->location_addlink }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.location.fields.orderby') }}
                                    </th>
                                    <td>
                                        {{ $location->orderby }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.location.fields.contact_info') }}
                                    </th>
                                    <td>
                                        {{ $location->contact_info->title ?? '' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.locations.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection