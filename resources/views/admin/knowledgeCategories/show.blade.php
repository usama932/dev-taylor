@extends('layouts.admin')
@section('content')

<div class="main-card">
    <div class="header">
        {{ trans('global.show') }} {{ trans('cruds.knowledgeCategory.title') }}
    </div>

    <div class="body">
            <div class="block pb-4">
                <a class="btn-md btn-gray" href="{{ route('admin.knowledge-categories.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="striped bordered show-table">
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
            <div class="block pb-4">
                <a class="btn-md btn-gray" href="{{ route('admin.knowledge-categories.index') }}">
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