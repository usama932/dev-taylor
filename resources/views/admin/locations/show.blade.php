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
                {{ trans('global.show') }} {{ trans('cruds.location.title') }}
              </h3>
            </div>
        </div>
        <div class="block w-full overflow-x-auto p-2">
          <!-- Projects table -->
           <table class=" stripe hover bordered datatable items-center w-full bg-transparent border-collapse">
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
        </div>
      </div>
    </div>
  </div>
</div>

@endsection