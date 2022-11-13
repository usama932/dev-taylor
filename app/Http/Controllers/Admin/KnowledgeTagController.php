<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyKnowledgeTagRequest;
use App\Http\Requests\StoreKnowledgeTagRequest;
use App\Http\Requests\UpdateKnowledgeTagRequest;
use App\Models\KnowledgeTag;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class KnowledgeTagController extends Controller
{
    public function index(Request $request)
    {
        abort_if(Gate::denies('knowledge_tag_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = KnowledgeTag::query()->select(sprintf('%s.*', (new KnowledgeTag())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'knowledge_tag_show';
                $editGate = 'knowledge_tag_edit';
                $deleteGate = 'knowledge_tag_delete';
                $crudRoutePart = 'knowledge-tags';

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
            $table->editColumn('slug', function ($row) {
                return $row->slug ? $row->slug : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.knowledgeTags.index');
    }

    public function create()
    {
        abort_if(Gate::denies('knowledge_tag_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.knowledgeTags.create');
    }

    public function store(StoreKnowledgeTagRequest $request)
    {
        $knowledgeTag = KnowledgeTag::create($request->all());

        return redirect()->route('admin.knowledge-tags.index');
    }

    public function edit(KnowledgeTag $knowledgeTag)
    {
        abort_if(Gate::denies('knowledge_tag_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.knowledgeTags.edit', compact('knowledgeTag'));
    }

    public function update(UpdateKnowledgeTagRequest $request, KnowledgeTag $knowledgeTag)
    {
        $knowledgeTag->update($request->all());

        return redirect()->route('admin.knowledge-tags.index');
    }

    public function show(KnowledgeTag $knowledgeTag)
    {
        abort_if(Gate::denies('knowledge_tag_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $knowledgeTag->load('tagKnowledges');

        return view('admin.knowledgeTags.show', compact('knowledgeTag'));
    }

    public function destroy(KnowledgeTag $knowledgeTag)
    {
        abort_if(Gate::denies('knowledge_tag_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $knowledgeTag->delete();

        return back();
    }

    public function massDestroy(MassDestroyKnowledgeTagRequest $request)
    {
        KnowledgeTag::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }
}
