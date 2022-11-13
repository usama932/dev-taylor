@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.knowledgeCategory.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.knowledge-categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.knowledgeCategory.fields.id') }}
                        </th>
                        <td>
                            {{ $knowledgeCategory->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.knowledgeCategory.fields.name') }}
                        </th>
                        <td>
                            {{ $knowledgeCategory->name }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.knowledgeCategory.fields.description') }}
                        </th>
                        <td>
                            {!! $knowledgeCategory->description !!}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.knowledgeCategory.fields.slug') }}
                        </th>
                        <td>
                            {{ $knowledgeCategory->slug }}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.knowledge-categories.index') }}">
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
            <a class="nav-link" href="#category_knowledges" role="tab" data-toggle="tab">
                {{ trans('cruds.knowledge.title') }}
            </a>
        </li>
    </ul>
    <div class="tab-content">
        <div class="tab-pane" role="tabpanel" id="category_knowledges">
            @includeIf('admin.knowledgeCategories.relationships.categoryKnowledges', ['knowledges' => $knowledgeCategory->categoryKnowledges])
        </div>
    </div>
</div>

@endsection