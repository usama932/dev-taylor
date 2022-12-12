@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.teamMember.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.team-members.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.teamMember.fields.id') }}
                        </th>
                        <td>
                            {{ $teamMember->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teamMember.fields.name') }}
                        </th>
                        <td>
                            {{ $teamMember->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teamMember.fields.subheading') }}
                        </th>
                        <td>
                            {{ $teamMember->subheading }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teamMember.fields.image') }}
                        </th>
                        <td>
                            @if($teamMember->image)
                                <a href="{{ $teamMember->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $teamMember->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teamMember.fields.content') }}
                        </th>
                        <td>
                            {{ $teamMember->content }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.team-members.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="px-4 md:px-10 mx-auto w-full -m-24">
  <div class="flex flex-wrap mt-4">
    <div class="w-full mb-12 px-4">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
          <div class="flex flex-wrap items-center">
             <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.team-members.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
              <h3 class="font-semibold text-lg text-blueGray-700">
                {{ trans('global.show') }} {{ trans('cruds.teamMember.title') }}
              </h3>
            </div>
        </div>
        <div class="block w-full overflow-x-auto p-2">
          <!-- Projects table -->
            <table class="stripe hover bordered datatable">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.teamMember.fields.id') }}
                        </th>
                        <td>
                            {{ $teamMember->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teamMember.fields.name') }}
                        </th>
                        <td>
                            {{ $teamMember->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teamMember.fields.subheading') }}
                        </th>
                        <td>
                            {{ $teamMember->subheading }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teamMember.fields.image') }}
                        </th>
                        <td>
                            @if($teamMember->image)
                                <a href="{{ $teamMember->image->getUrl() }}" target="_blank" style="display: inline-block">
                                    <img src="{{ $teamMember->image->getUrl('thumb') }}">
                                </a>
                            @endif
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.teamMember.fields.content') }}
                        </th>
                        <td>
                            {{ $teamMember->content }}
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