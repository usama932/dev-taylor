@extends('layouts.admin')
@section('content')



<div class="px-4 md:px-10 mx-auto w-full -m-24">
  <div class="flex flex-wrap mt-4">
    <div class="w-full mb-12 px-4">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
          <div class="flex flex-wrap items-center">
             <div class="form-group">
                <a class="btn btn-blue" href="{{ route('admin.page-custom-fields.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
              <h3 class="font-semibold text-lg text-blueGray-700">
                 {{ trans('global.show') }} {{ trans('cruds.pageCustomField.title') }}
              </h3>
            </div>
        </div>
        <div class="block w-full overflow-x-auto p-2">
          <!-- Projects table -->
             <table class="stripe hover bordered datatable">
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
        </div>
      </div>
    </div>
  </div>
</div>

@endsection