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
                 {{ trans('global.show') }} {{ trans('cruds.contentTag.title') }}
              </h3>
            </div>
            
            <div class="btn-text-left"> 
              <a class="btn btn-indigo" href="{{ route('admin.content-tags.index') }}">
                {{ trans('global.back_to_list') }}
            </a>
            </div>
            
           
          </div>
        </div>
        <div class="block w-full overflow-x-auto p-2">
            <table class="stripe hover bordered datatable  ">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.contentTag.fields.id') }}
                        </th>
                        <td>
                            {{ $contentTag->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contentTag.fields.name') }}
                        </th>
                        <td>
                            {{ $contentTag->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.contentTag.fields.slug') }}
                        </th>
                        <td>
                            {{ $contentTag->slug }}
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