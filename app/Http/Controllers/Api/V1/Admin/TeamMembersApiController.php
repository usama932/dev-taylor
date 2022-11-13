<?php

namespace App\Http\Controllers\Api\V1\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\StoreTeamMemberRequest;
use App\Http\Requests\UpdateTeamMemberRequest;
use App\Http\Resources\Admin\TeamMemberResource;
use App\Models\TeamMember;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class TeamMembersApiController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('team_member_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TeamMemberResource(TeamMember::with(['created_by'])->get());
    }

    public function store(StoreTeamMemberRequest $request)
    {
        $teamMember = TeamMember::create($request->all());

        if ($request->input('image', false)) {
            $teamMember->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        return (new TeamMemberResource($teamMember))
            ->response()
            ->setStatusCode(Response::HTTP_CREATED);
    }

    public function show(TeamMember $teamMember)
    {
        abort_if(Gate::denies('team_member_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return new TeamMemberResource($teamMember->load(['created_by']));
    }

    public function update(UpdateTeamMemberRequest $request, TeamMember $teamMember)
    {
        $teamMember->update($request->all());

        if ($request->input('image', false)) {
            if (!$teamMember->image || $request->input('image') !== $teamMember->image->file_name) {
                if ($teamMember->image) {
                    $teamMember->image->delete();
                }
                $teamMember->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($teamMember->image) {
            $teamMember->image->delete();
        }

        return (new TeamMemberResource($teamMember))
            ->response()
            ->setStatusCode(Response::HTTP_ACCEPTED);
    }

    public function destroy(TeamMember $teamMember)
    {
        abort_if(Gate::denies('team_member_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamMember->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
