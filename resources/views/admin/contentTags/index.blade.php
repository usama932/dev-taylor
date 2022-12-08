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
                {{ trans('cruds.contentTag.title_singular') }} {{ trans('global.list') }}
              </h3>
            </div>
            @can('content_tag_create')
            <div class="btn-text-left"> 
              <a class="btn btn-indigo" href="{{ route('admin.content-tags.create') }}">
                 {{ trans('global.add') }} {{ trans('cruds.contentTag.title_singular') }}
            </a>
            </div>
            @endcan
           
          </div>
        </div>
        <div class="block w-full overflow-x-auto p-2">
          <!-- Projects table -->
             <div class="table-responsive">
            <table class=" stripe hover bordered datatable  datatable-ContentTag">
                <thead>
                    <tr>
                        <th width="10">

                        </th>
                        <th>
                            {{ trans('cruds.contentTag.fields.id') }}
                        </th>
                        <th>
                            {{ trans('cruds.contentTag.fields.name') }}
                        </th>
                        <th>
                            {{ trans('cruds.contentTag.fields.slug') }}
                        </th>
                        <th>
                            &nbsp;
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contentTags as $key => $contentTag)
                        <tr data-entry-id="{{ $contentTag->id }}">
                            <td>

                            </td>
                            <td>
                                {{ $contentTag->id ?? '' }}
                            </td>
                            <td>
                                {{ $contentTag->name ?? '' }}
                            </td>
                            <td>
                                {{ $contentTag->slug ?? '' }}
                            </td>
                            <td>
                                @can('content_tag_show')
                                    <a class="btn btn-xs btn-primary" href="{{ route('admin.content-tags.show', $contentTag->id) }}">
                                        {{ trans('global.view') }}
                                    </a>
                                @endcan

                                @can('content_tag_edit')
                                    <a class="btn btn-xs btn-info" href="{{ route('admin.content-tags.edit', $contentTag->id) }}">
                                        {{ trans('global.edit') }}
                                    </a>
                                @endcan

                                @can('content_tag_delete')
                                    <form action="{{ route('admin.content-tags.destroy', $contentTag->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
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
  </div>
</div>


@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('content_tag_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.content-tags.massDestroy') }}",
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
  let table = $('.datatable-ContentTag:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection