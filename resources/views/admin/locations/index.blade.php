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
                {{ trans('cruds.location.title_singular') }} {{ trans('global.list') }}
              </h3>
            </div>
            @can('location_create')
                <div class="btn-text-left"> 
                <a class="btn btn-indigo" href="{{ route('admin.locations.create') }}">
                    {{ trans('global.add') }} {{ trans('cruds.location.title_singular') }}
                </a>
                </div>
                </div>
            @endcan
        </div>
        <div class="block w-full overflow-x-auto p-2">
          <!-- Projects table -->
          
              <table class="items-center w-full bg-transparent border-collapse datatable-Location">
                    <thead>
                        <tr>
                            <th width="10">

                            </th>
                            <th>
                                {{ trans('cruds.location.fields.location_country') }}
                            </th>
                            <th>
                                {{ trans('cruds.location.fields.location_phone') }}
                            </th>
                            <th>
                                {{ trans('cruds.location.fields.location_address') }}
                            </th>
                            <th>
                                &nbsp;
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($locations as $key => $location)
                            <tr data-entry-id="{{ $location->id }}">
                                <td>

                                </td>
                                <td>
                                    {{ $location->location_country ?? '' }}
                                </td>
                                <td>
                                    {{ $location->location_phone ?? '' }}
                                </td>
                                <td>
                                    {{ $location->location_address ?? '' }}
                                </td>
                                <td>
                                    @can('location_show')
                                        <a class="btn btn-sm btn-primary" href="{{ route('admin.locations.show', $location->id) }}" style="background-color:#000 !important; color:#fff !important">
                                            {{ trans('global.view') }}
                                        </a>
                                    @endcan

                                    @can('location_edit')
                                        <a class="btn btn-sm btn-info" href="{{ route('admin.locations.edit', $location->id) }}"  style="background-color:#ffc200 !important; color:#000 !important">
                                            {{ trans('global.edit') }}
                                        </a>
                                    @endcan

                                    @can('location_delete')
                                        <form action="{{ route('admin.locations.destroy', $location->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
                                            <input type="hidden" name="_method" value="DELETE">
                                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                            <input type="submit" class="btn btn-sm btn-danger" value="{{ trans('global.delete') }}"  style="background-color:#FF0000 !important; color:#000 !important">
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

@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('location_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}'
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.locations.massDestroy') }}",
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
  let table = $('.datatable-Location:not(.ajaxTable)').DataTable({ buttons: dtButtons })
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
})

</script>
@endsection