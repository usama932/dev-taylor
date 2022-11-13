@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.knowledgeTag.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.knowledge-tags.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.knowledgeTag.fields.id') }}
                        </th>
                        <td>
                            {{ $knowledgeTag->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.knowledgeTag.fields.name') }}
                        </th>
                        <td>
                            {{ $knowledgeTag->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.knowledgeTag.fields.slug') }}
                        </th>
                        <td>
                            {{ $knowledgeTag->slug }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.knowledge-tags.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>

<div class="card">
    <div class="card-header">
        {{ trans('global.relatedData') }}
    </div>
    <ul class="nav nav-tabs" role="tablist" id="relationship-tabs">
        <li class="nav-item">
            <a class="nav-link" href="#tag_knowledges" role="tab" data-toggle="tab">
                {{ trans('cruds.knowledge.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="tag_knowledges">
            @includeIf('admin.knowledgeTags.relationships.tagKnowledges', ['knowledges' => $knowledgeTag->tagKnowledges])
        </div>
    </div>
</div>

@endsection