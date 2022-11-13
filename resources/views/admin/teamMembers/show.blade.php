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



@endsection