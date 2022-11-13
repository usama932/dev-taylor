<?php

namespace App\Http\Controllers\Frontend;

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

class MenuitemController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('menuitem_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $menuitems = Menuitem::with(['menu', 'page_link', 'parent'])->get();

        return view('frontend.menuitems.index', compact('menuitems'));
    }

    public function create()
    {
        abort_if(Gate::denies('menuitem_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $menus = Navigationmenu::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $page_links = ContentPage::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $parents = Menuitem::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.menuitems.create', compact('menus', 'page_links', 'parents'));
    }

    public function store(StoreMenuitemRequest $request)
    {
        $menuitem = Menuitem::create($request->all());

        return redirect()->route('frontend.menuitems.index');
    }

    public function edit(Menuitem $menuitem)
    {
        abort_if(Gate::denies('menuitem_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $menus = Navigationmenu::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $page_links = ContentPage::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $parents = Menuitem::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $menuitem->load('menu', 'page_link', 'parent');

        return view('frontend.menuitems.edit', compact('menuitem', 'menus', 'page_links', 'parents'));
    }

    public function update(UpdateMenuitemRequest $request, Menuitem $menuitem)
    {
        $menuitem->update($request->all());

        return redirect()->route('frontend.menuitems.index');
    }

    public function show(Menuitem $menuitem)
    {
        abort_if(Gate::denies('menuitem_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $menuitem->load('menu', 'page_link', 'parent');

        return view('frontend.menuitems.show', compact('menuitem'));
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
