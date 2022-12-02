@extends('layouts.admin')
@section('content')
@can('content_category_create')
    <div class="block my-4">
        <div class="col-lg-12">
            <a class="btn-md btn-blue" href="{{ route('admin.content-categories.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.contentCategory.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="main-card">
    <div class="header">
        {{ trans('cruds.contentCategory.title_singular') }} {{ trans('global.list') }}
    </div>

    <div class="body">
        <div class="w-full">
            <div class="table-responsive">
                <table class=" stripe hover bordered datatable datatable-ContentCategory">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.contentCategory.fields.id') }}
                            </th>
                            <th>
                                {{ trans('cruds.contentCategory.fields.name') }}
                            </th>
                            <th>
                                {{ trans('cruds.contentCategory.fields.slug') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($contentCategories as $key => $contentCategory)
                            <tr data-entry-id="{{ $contentCategory->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $contentCategory->id ?? '' }}
                                </td>
                                <td>
                                    {{ $contentCategory->name ?? '' }}
                                </td>
                                <td>
                                    {{ $contentCategory->slug ?? '' }}
                                </td>
                                <td>
                                    @can('content_category_show')
                                        <a class="btn btn-xs btn-primary" href="{{ route('admin.content-categories.show', $contentCategory->id) }}">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('content_category_edit')
                                        <a class="btn btn-xs btn-info" href="{{ route('admin.content-categories.edit', $contentCategory->id) }}">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('content_category_delete')
                                        <form action="{{ route('admin.content-categories.destroy', $contentCategory->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('content_category_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.content-categories.massDestroy') }}",
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
  let table = $('.datatable-ContentCategory:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection