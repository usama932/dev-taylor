<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyMenuitemRequest;
use App\Http\Requests\StoreMenuitemRequest;
use App\Http\Requests\UpdateMenuitemRequest;
use App\Models\ContentPage;
use App\Models\Menuitem;
use App\Models\Navigationmenu;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class MenuitemController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('menuitem_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = Menuitem::with(['menu', 'page_link', 'parent'])->select(sprintf('%s.*', (new Menuitem())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'menuitem_show';
                $editGate = 'menuitem_edit';
                $deleteGate = 'menuitem_delete';
                $crudRoutePart = 'menuitems';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('name', function ($row) {
                return $row->name ? $row->name : '';
            });
            $table->addColumn('menu_name', function ($row) {
                return $row->menu ? $row->menu->name : '';
            });

            $table->rawColumns(['actions', 'placeholder', 'menu']);

            return $table->make(true);
        }

        return view('admin.menuitems.index');
    }

    public function create()
    {
        abort_if(Gate::denies('menuitem_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $menus = Navigationmenu::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $page_links = ContentPage::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $parents = Menuitem::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.menuitems.create', compact('menus', 'page_links', 'parents'));
    }

    public function store(StoreMenuitemRequest $request)
    {
        $menuitem = Menuitem::create($request->all());

        return redirect()->route('admin.menuitems.index');
    }

    public function edit(Menuitem $menuitem)
    {
        abort_if(Gate::denies('menuitem_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $menus = Navigationmenu::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $page_links = ContentPage::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $parents = Menuitem::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $menuitem->load('menu', 'page_link', 'parent');

        return view('admin.menuitems.edit', compact('menuitem', 'menus', 'page_links', 'parents'));
    }

    public function update(UpdateMenuitemRequest $request, Menuitem $menuitem)
    {
        $menuitem->update($request->all());

        return redirect()->route('admin.menuitems.index');
    }

    public function show(Menuitem $menuitem)
    {
        abort_if(Gate::denies('menuitem_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $menuitem->load('menu', 'page_link', 'parent');

        return view('admin.menuitems.show', compact('menuitem'));
    }

    public function destroy(Menuitem $menuitem)
    {
        abort_if(Gate::denies('menuitem_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $menuitem->delete();

        return back();
    }

    public function massDestroy(MassDestroyMenuitemRequest $request)
    {
        Menuitem::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
