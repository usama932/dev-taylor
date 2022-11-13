<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\MassDestroyKnowledgeTagRequest;
use App\Http\Requests\StoreKnowledgeTagRequest;
use App\Http\Requests\UpdateKnowledgeTagRequest;
use App\Models\KnowledgeTag;
use Gate;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class KnowledgeTagController extends Controller
{
    public function index()
    {
        abort_if(Gate::denies('knowledge_tag_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $knowledgeTags = KnowledgeTag::all();

        return view('frontend.knowledgeTags.index', compact('knowledgeTags'));
    }

    public function create()
    {
        abort_if(Gate::denies('knowledge_tag_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.knowledgeTags.create');
    }

    public function store(StoreKnowledgeTagRequest $request)
    {
        $knowledgeTag = KnowledgeTag::create($request->all());

        return redirect()->route('frontend.knowledge-tags.index');
    }

    public function edit(KnowledgeTag $knowledgeTag)
    {
        abort_if(Gate::denies('knowledge_tag_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('frontend.knowledgeTags.edit', compact('knowledgeTag'));
    }

    public function update(UpdateKnowledgeTagRequest $request, KnowledgeTag $knowledgeTag)
    {
        $knowledgeTag->update($request->all());

        return redirect()->route('frontend.knowledge-tags.index');
    }

    public function show(KnowledgeTag $knowledgeTag)
    {
        abort_if(Gate::denies('knowledge_tag_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $knowledgeTag->load('tagKnowledges');

        return view('frontend.knowledgeTags.show', compact('knowledgeTag'));
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
