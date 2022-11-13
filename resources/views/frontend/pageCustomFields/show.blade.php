@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.show') }} {{ trans('cruds.pageCustomField.title') }}
                </div>

                <div class="card-body">
                    <div class="form-group">
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.page-custom-fields.index') }}">
                                {{ trans('global.back_to_list') }}
                            </a>
                        </div>
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
                                    <th>
                                        {{ trans('cruds.pageCustomField.fields.id') }}
                                    </th>
                                    <td>
                                        {{ $pageCustomField->id }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.pageCustomField.fields.field_lable') }}
                                    </th>
                                    <td>
                                        {{ $pageCustomField->field_lable }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.pageCustomField.fields.field_value') }}
                                    </th>
                                    <td>
                                        {{ $pageCustomField->field_value }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.pageCustomField.fields.type') }}
                                    </th>
                                    <td>
                                        {{ App\Models\PageCustomField::TYPE_SELECT[$pageCustomField->type] ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.pageCustomField.fields.page') }}
                                    </th>
                                    <td>
                                        {{ $pageCustomField->page->title ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.pageCustomField.fields.what_we_do') }}
                                    </th>
                                    <td>
                                        {{ $pageCustomField->what_we_do->title ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.pageCustomField.fields.case_study_custom') }}
                                    </th>
                                    <td>
                                        {{ $pageCustomField->case_study_custom->title ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.pageCustomField.fields.knowledge_custom') }}
                                    </th>
                                    <td>
                                        {{ $pageCustomField->knowledge_custom->name ?? '' }}
                                    </td>
                                </tr>
                                <tr>
                                    <th>
                                        {{ trans('cruds.pageCustomField.fields.team_custom') }}
                                    </th>
                                    <td>
                                        {{ $pageCustomField->team_custom->name ?? '' }}
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="form-group">
                            <a class="btn btn-default" href="{{ route('frontend.page-custom-fields.index') }}">
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