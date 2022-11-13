@can('page_custom_field_create')
    <div style="margin-bottom: 10px;" class="row">
        <div class="col-lg-12">
            <a class="btn btn-success" href="{{ route('admin.page-custom-fields.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.pageCustomField.title_singular') }}
            </a>
        </div>
    </div>
@endcan

<div class="card">
    <div class="card-header">
        {{ trans('cruds.pageCustomField.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="card-body">
        <div class="table-responsive">
            <table class=" table table-bordered table-striped table-hover datatable datatable-pagePageCustomFields">
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
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.page-custom-fields.show', $pageCustomField->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('page_custom_field_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.page-custom-fields.edit', $pageCustomField->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('page_custom_field_delete')
                                    <form action="{{ route('admin.page-custom-fields.destroy', $pageCustomField->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                        <input type="submit" class="btn btn-xs btn-danger" value="{{ trans('global.delete') }}">
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
  });
  let table = $('.datatable-pagePageCustomFields:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection