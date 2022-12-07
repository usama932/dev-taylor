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
                 {{ trans('cruds.pageCustomField.title_singular') }} {{ trans('global.list') }}
              </h3>
            </div>
            @can('page_custom_field_create')
                <div class="btn-text-left"> 
                    <a class="btn btn-indigo" href="{{ route('admin.page-custom-fields.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.pageCustomField.title_singular') }}
                    </a>
                </div>
            @endcan
           
          </div>
        </div>
        <div class="block w-full overflow-x-auto">
          <!-- Projects table -->
              <div class="w-full">
        
            <table class=" stripe hover bordered datatable datatable-PageCustomField overflow-auto">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.pageCustomField.fields.field_lable') }}
                        </th>
                        <th>
                            {{ trans('cruds.pageCustomField.fields.field_value') }}
                        </th>
                        <th>
                            {{ trans('cruds.pageCustomField.fields.type') }}
                        </th>
                        <th>
                            {{ trans('cruds.pageCustomField.fields.page') }}
                        </th>
                        <th>
                            {{ trans('cruds.contentPage.fields.excerpt') }}
                        </th>
                        <th>
                            {{ trans('cruds.contentPage.fields.order_by') }}
                        </th>
                        <th>
                            {{ trans('cruds.contentPage.fields.slug') }}
                        </th>
                        <th>
                            {{ trans('cruds.contentPage.fields.status') }}
                        </th>
                        <th>
                            {{ trans('cruds.pageCustomField.fields.what_we_do') }}
                        </th>
                        <th>
                            {{ trans('cruds.pageCustomField.fields.case_study_custom') }}
                        </th>
                        <th>
                            {{ trans('cruds.pageCustomField.fields.knowledge_custom') }}
                        </th>
                        <th>
                            {{ trans('cruds.pageCustomField.fields.team_custom') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($pageCustomFields as $key => $pageCustomField)
                        <tr data-entry-id="{{ $pageCustomField->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $pageCustomField->field_lable ?? '' }}
                            </td>
                            <td>
                                {{ $pageCustomField->field_value ?? '' }}
                            </td>
                            <td>
                                {{ App\Models\PageCustomField::TYPE_SELECT[$pageCustomField->type] ?? '' }}
                            </td>
                            <td>
                                {{ $pageCustomField->page->title ?? '' }}
                            </td>
                            <td>
                                {{ $pageCustomField->page->excerpt ?? '' }}
                            </td>
                            <td>
                                {{ $pageCustomField->page->order_by ?? '' }}
                            </td>
                            <td>
                                {{ $pageCustomField->page->slug ?? '' }}
                            </td>
                            <td>
                                @if($pageCustomField->page)
                                    {{ $pageCustomField->page::STATUS_SELECT[$pageCustomField->page->status] ?? '' }}
                                @endif
                            </td>
                            <td>
                                {{ $pageCustomField->what_we_do->title ?? '' }}
                            </td>
                            <td>
                                {{ $pageCustomField->case_study_custom->title ?? '' }}
                            </td>
                            <td>
                                {{ $pageCustomField->knowledge_custom->name ?? '' }}
                            </td>
                            <td>
                                {{ $pageCustomField->team_custom->name ?? '' }}
                            </td>
                            <td>
                                @can('page_custom_field_show')
                                    <a class="btn-sm" href="{{ route('admin.page-custom-fields.show', $pageCustomField->id) }}"  style="background-color:#000 !important; color:#fff !important">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('page_custom_field_edit')
                                    <a class="btn-sm" href="{{ route('admin.page-custom-fields.edit', $pageCustomField->id) }}"  style="background-color:#ffc200 !important; color:#000 !important">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('page_custom_field_delete')
                                    <form action="{{ route('admin.page-custom-fields.destroy', $pageCustomField->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit"  class="btn-sm btn-red" value="{{ trans('global.delete') }}">
                                    </form>
                                @endcan

                            </td>

                        </tr>
                    @endforeach
                </tbody>
            </table>
       
    </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('page_custom_field_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.page-custom-fields.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).nodes(), function (entry) {
          return $(entry).data('entry-id')
      });

      if (ids.length === 0) {
        alert('{{ trans('global.datatables.zero_selected') }}')

        return
      }

      if (confirm('{{ trans('global.areYouSure') }}')) {
        $.ajax({
          headers: {'x-csrf-token': _token},
          method: 'POST',
          url: config.url,
          data: { ids: ids, _method: 'DELETE' }})
          .done(function () { location.reload() })
      }
    }
  }
  dtButtons.push(deleteButton)
@endcan

  $.extend(true, $.fn.dataTable.defaults, {
    orderCellsTop: true,
    
    order: [[ 1, 'desc' ]],
    pageLength: 100,
     "sScrollX": "100%",
            "sScrollXInner": "110%",
            "bScrollCollapse": true
  });
  let table = $('.datatable-PageCustomField:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection