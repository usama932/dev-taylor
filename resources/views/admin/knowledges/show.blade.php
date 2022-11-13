@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.knowledge.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.knowledges.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.knowledge.fields.id') }}
                        </th>
                        <td>
                            {{ $knowledge->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.knowledge.fields.name') }}
                        </th>
                        <td>
                            {{ $knowledge->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.knowledge.fields.description') }}
                        </th>
                        <td>
                            {{ $knowledge->description }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.knowledge.fields.content') }}
                        </th>
                        <td>
                            {!! $knowledge->content !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.knowledge.fields.category') }}
                        </th>
                        <td>
                            {{ $knowledge->category->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.knowledge.fields.tag') }}
                        </th>
                        <td>
                            {{ $knowledge->tag->name ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.knowledge.fields.status') }}
                        </th>
                        <td>
                            {{ App\Models\Knowledge::STATUS_SELECT[$knowledge->status] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.knowledge.fields.publish_date') }}
                        </th>
                        <td>
                            {{ $knowledge->publish_date }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.knowledges.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection