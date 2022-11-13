<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreNavigationmenuRequest;
use App\Http\Requests\UpdateNavigationmenuRequest;
use App\Http\Resources\Admin\NavigationmenuResource;
use App\Models\Navigationmenu;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class NavigationmenuApiController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('navigationmenu_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new NavigationmenuResource(Navigationmenu::with(['parent'])->get());
    }

    public function store(StoreNavigationmenuRequest $request)
    {
        $navigationmenu = Navigationmenu::create($request->all());

        return (new NavigationmenuResource($navigationmenu))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(Navigationmenu $navigationmenu)
    {
        abort_if(Gate::denies('navigationmenu_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new NavigationmenuResource($navigationmenu->load(['parent']));
    }

    public function update(UpdateNavigationmenuRequest $request, Navigationmenu $navigationmenu)
    {
        $navigationmenu->update($request->all());

        return (new NavigationmenuResource($navigationmenu))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(Navigationmenu $navigationmenu)
    {
        abort_if(Gate::denies('navigationmenu_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $navigationmenu->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
