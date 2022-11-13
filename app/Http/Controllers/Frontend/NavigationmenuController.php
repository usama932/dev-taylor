<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyNavigationmenuRequest;
use App\Http\Requests\StoreNavigationmenuRequest;
use App\Http\Requests\UpdateNavigationmenuRequest;
use App\Models\Navigationmenu;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NavigationmenuController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('navigationmenu_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $navigationmenus = Navigationmenu::with(['parent'])->get();

        return view('frontend.navigationmenus.index', compact('navigationmenus'));
    }

    public function create()
    {
        abort_if(Gate::denies('navigationmenu_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $parents = Navigationmenu::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('frontend.navigationmenus.create', compact('parents'));
    }

    public function store(StoreNavigationmenuRequest $request)
    {
        $navigationmenu = Navigationmenu::create($request->all());

        return redirect()->route('frontend.navigationmenus.index');
    }

    public function edit(Navigationmenu $navigationmenu)
    {
        abort_if(Gate::denies('navigationmenu_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $parents = Navigationmenu::pluck('name', 'id')->prepend(trans('global.pleaseSelect'), '');

        $navigationmenu->load('parent');

        return view('frontend.navigationmenus.edit', compact('navigationmenu', 'parents'));
    }

    public function update(UpdateNavigationmenuRequest $request, Navigationmenu $navigationmenu)
    {
        $navigationmenu->update($request->all());

        return redirect()->route('frontend.navigationmenus.index');
    }

    public function show(Navigationmenu $navigationmenu)
    {
        abort_if(Gate::denies('navigationmenu_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $navigationmenu->load('parent', 'menuMenuitems', 'parentNavigationmenus');

        return view('frontend.navigationmenus.show', compact('navigationmenu'));
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
