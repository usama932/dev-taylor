<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyNavigationmenuRequest;
use App\Http\Requests\StoreNavigationmenuRequest;
use App\Http\Requests\UpdateNavigationmenuRequest;
use App\Models\Navigationmenu;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class NavigationmenuController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('navigationmenu_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Navigationmenu::with(['parent'])->select(sprintf('%s.*', (new Navigationmenu())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'navigationmenu_show';
                $editGate = 'navigationmenu_edit';
                $deleteGate = 'navigationmenu_delete';
                $crudRoutePart = 'navigationmenus';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('id', function ($row) {
                return $row->id ? $row->id : '';
            });
            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->addColumn('parent_name', function ($row) {
                return $row->parent ? $row->parent->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'parent']);

            return $table->make(true);
        }

        return view('admin.navigationmenus.index');
    }

    public function create()
    {
        abort_if(Gate::denies('navigationmenu_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $parents = Navigationmenu::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.navigationmenus.create', compact('parents'));
    }

    public function store(StoreNavigationmenuRequest $request)
    {
        $navigationmenu = Navigationmenu::create($request->all());

        return redirect()->route('admin.navigationmenus.index');
    }

    public function edit(Navigationmenu $navigationmenu)
    {
        abort_if(Gate::denies('navigationmenu_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $parents = Navigationmenu::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $navigationmenu->load('parent');

        return view('admin.navigationmenus.edit', compact('navigationmenu', 'parents'));
    }

    public function update(UpdateNavigationmenuRequest $request, Navigationmenu $navigationmenu)
    {
        $navigationmenu->update($request->all());

        return redirect()->route('admin.navigationmenus.index');
    }

    public function show(Navigationmenu $navigationmenu)
    {
        abort_if(Gate::denies('navigationmenu_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $navigationmenu->load('parent', 'menuMenuitems', 'parentNavigationmenus');

        return view('admin.navigationmenus.show', compact('navigationmenu'));
    }

    public function destroy(Navigationmenu $navigationmenu)
    {
        abort_if(Gate::denies('navigationmenu_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $navigationmenu->delete();

        return back();
    }

    public function massDestroy(MassDestroyNavigationmenuRequest $request)
    {
        Navigationmenu::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
