<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyTeamMemberRequest;
use App\Http\Requests\StoreTeamMemberRequest;
use App\Http\Requests\UpdateTeamMemberRequest;
use App\Models\TeamMember;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class TeamMembersController extends Controller
{
    use MediaUploadingTrait;

    public function index(Request $request)
    {
        abort_if(Gate::denies('team_member_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = TeamMember::with(['created_by'])->select(sprintf('%s.*', (new TeamMember())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'team_member_show';
                $editGate = 'team_member_edit';
                $deleteGate = 'team_member_delete';
                $crudRoutePart = 'team-members';

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
            $table->editColumn('subheading', function ($row) {
                return $row->subheading ? $row->subheading : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.teamMembers.index');
    }

    public function create()
    {
        abort_if(Gate::denies('team_member_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.teamMembers.create');
    }

    public function store(StoreTeamMemberRequest $request)
    {
        $teamMember = TeamMember::create($request->all());

        if ($request->input('image', false)) {
            $teamMember->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $teamMember->id]);
        }

        return redirect()->route('admin.team-members.index');
    }

    public function edit(TeamMember $teamMember)
    {
        abort_if(Gate::denies('team_member_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamMember->load('created_by');

        return view('admin.teamMembers.edit', compact('teamMember'));
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

        return redirect()->route('admin.team-members.index');
    }

    public function show(TeamMember $teamMember)
    {
        abort_if(Gate::denies('team_member_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamMember->load('created_by');

        return view('admin.teamMembers.show', compact('teamMember'));
    }

    public function destroy(TeamMember $teamMember)
    {
        abort_if(Gate::denies('team_member_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $teamMember->delete();

        return back();
    }

    public function massDestroy(MassDestroyTeamMemberRequest $request)
    {
        TeamMember::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('team_member_create') && Gate::denies('team_member_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new TeamMember();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
