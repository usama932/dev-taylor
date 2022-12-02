@can($viewGate)
    <a class="btn-sm" href="{{ route('admin.' . $crudRoutePart . '.show', $row->id) }}" style="background-color:#000 !important; color:#fff !important">
        {{ trans('global.view') }}
    </a>
@endcan
@can($editGate)
    <a class="btn-sm" href="{{ route('admin.' . $crudRoutePart . '.edit', $row->id) }}" style="background-color:#ffc200 !important; color:#000 !important">
        {{ trans('global.edit') }}
    </a>
@endcan
@can($deleteGate)
    <form action="{{ route('admin.' . $crudRoutePart . '.destroy', $row->id) }}" method="POST" onsubmit="return confirm('{{ trans('global.areYouSure') }}');" style="display: inline-block;">
        <input type="hidden" name="_method" value="DELETE">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="submit" class="btn-sm btn-red" value="{{ trans('global.delete') }}">
    </form>
@endcan