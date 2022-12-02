@extends('layouts.admin')
@section('content')
@can('case_study_create')
    <div class="block my-4">
        <div class="col-lg-12">
            <a class="btn-md btn-blue" href="{{ route('admin.case-studies.create') }}">
                {{ trans('global.add') }} {{ trans('cruds.caseStudy.title_singular') }}
            </a>
        </div>
    </div>
@endcan
<div class="main-card">
    <div class="header">
        {{ trans('cruds.caseStudy.title_singular') }} {{ trans('global.list') }}
    </div>
    <div class="body">
      <div class="w-full">
        <table class="stripe hover bordered datatable datatable-CaseStudy">
            <thead>
                <tr>
                    <th width="10">

                    </th>
                    <th>
                        {{ trans('cruds.caseStudy.fields.title') }}
                    </th>
                    <th>
                        {{ trans('cruds.caseStudy.fields.status') }}
                    </th>
                    <th>
                        &nbsp;
                    </th>
                </tr>
            </thead>
        </table>
      </div>
    </div>
</div>



@endsection
@section('scripts')
@parent
<script>
    $(function () {
  let dtButtons = $.extend(true, [], $.fn.dataTable.defaults.buttons)
@can('case_study_delete')
  let deleteButtonTrans = '{{ trans('global.datatables.delete') }}';
  let deleteButton = {
    text: deleteButtonTrans,
    url: "{{ route('admin.case-studies.massDestroy') }}",
    className: 'btn-danger',
    action: function (e, dt, node, config) {
      var ids = $.map(dt.rows({ selected: true }).data(), function (entry) {
          return entry.id
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

  let dtOverrideGlobals = {
    buttons: dtButtons,
    processing: true,
    serverSide: true,
    retrieve: true,
    aaSorting: [],
    ajax: "{{ route('admin.case-studies.index') }}",
    columns: [
      { data: 'placeholder', name: 'placeholder' },
{ data: 'title', name: 'title' },
{ data: 'status', name: 'status' },
{ data: 'actions', name: '{{ trans('global.actions') }}' }
    ],
    orderCellsTop: true,
    order: [[ 1, 'desc' ]],
    pageLength: 100,
  };
  let table = $('.datatable-CaseStudy').DataTable(dtOverrideGlobals);
  $('a[data-toggle="tab"]').on('shown.bs.tab click', function(e){
      $($.fn.dataTable.tables(true)).DataTable()
          .columns.adjust();
  });
  
});

</script>
@endsection