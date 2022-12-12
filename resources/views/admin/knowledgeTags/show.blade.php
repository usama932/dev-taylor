@extends('layouts.admin')
@section('content')

<div class="main-card">
    <div class="header">
        {{ trans('global.show') }} {{ trans('cruds.knowledgeTag.title') }}
    </div>

    <div class="body">
            <div class="block pb-4">
                <a class="btn-md btn-gray" href="{{ route('admin.knowledge-tags.index') }}">
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
<div class="px-4 md:px-10 mx-auto w-full -m-24">
  <div class="flex flex-wrap mt-4">
    <div class="w-full mb-12 px-4">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
          <div class="flex flex-wrap items-center">
            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
              <h3 class="font-semibold text-lg text-blueGray-700">
                 {{ trans('global.show') }} {{ trans('cruds.knowledgeTag.title') }}
              </h3>
            </div>
        </div>
        <div class="block w-full overflow-x-auto p-2">
          <!-- Projects table -->
          
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
       
        </div>
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