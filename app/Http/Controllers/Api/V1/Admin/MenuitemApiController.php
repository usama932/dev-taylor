<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreMenuitemRequest;
use App\Http\Requests\UpdateMenuitemRequest;
use App\Http\Resources\Admin\MenuitemResource;
use App\Models\Menuitem;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class MenuitemApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('menuitem_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MenuitemResource(Menuitem::with(['menu', 'page_link', 'parent'])->get());
    }

    public function store(StoreMenuitemRequest $request)
    {
        $menuitem = Menuitem::create($request->all());

        return (new MenuitemResource($menuitem))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Menuitem $menuitem)
    {
        abort_if(Gate::denies('menuitem_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new MenuitemResource($menuitem->load(['menu', 'page_link', 'parent']));
    }

    public function update(UpdateMenuitemRequest $request, Menuitem $menuitem)
    {
        $menuitem->update($request->all());

        return (new MenuitemResource($menuitem))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Menuitem $menuitem)
    {
        abort_if(Gate::denies('menuitem_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $menuitem->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
