@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.navigationmenu.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.navigationmenus.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.navigationmenu.fields.id') }}
                        </th>
                        <td>
                            {{ $navigationmenu->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.navigationmenu.fields.name') }}
                        </th>
                        <td>
                            {{ $navigationmenu->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.navigationmenu.fields.parent') }}
                        </th>
                        <td>
                            {{ $navigationmenu->parent->name ?? '' }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.navigationmenus.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#menu_menuitems" role="tab" data-toggle="tab">
                {{ trans('cruds.menuitem.title') }}
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#parent_navigationmenus" role="tab" data-toggle="tab">
                {{ trans('cruds.navigationmenu.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="menu_menuitems">
            @includeIf('admin.navigationmenus.relationships.menuMenuitems', ['menuitems' => $navigationmenu->menuMenuitems])
        </div>
        <div class="tab-pane" role="tabpanel" id="parent_navigationmenus">
            @includeIf('admin.navigationmenus.relationships.parentNavigationmenus', ['navigationmenus' => $navigationmenu->parentNavigationmenus])
        </div>
    </div>
</div>

@endsection