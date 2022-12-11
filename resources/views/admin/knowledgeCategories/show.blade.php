@extends('layouts.admin')
@section('content')



<div class="px-4 md:px-10 mx-auto w-full -m-24">
  <div class="flex flex-wrap mt-4">
    <div class="w-full mb-12 px-4">
      <div class="relative flex flex-col min-w-0 break-words w-full mb-6 shadow-lg rounded bg-white">
        <div class="rounded-t mb-0 px-4 py-3 border-0">
          <div class="flex flex-wrap items-center">
            <div class="relative w-full px-4 max-w-full flex-grow flex-1">
              <h3 class="font-semibold text-lg text-blueGray-700">
                <div class="btn-text-left"> 
                    <a class="btn btn-indigo" href="{{ route('admin.knowledge-categories.index') }}">
                        Back to List
                    </a>
                </div>
                {{ trans('cruds.knowledgeCategory.title_singular') }} {{ trans('global.list') }}
              </h3>
            </div>
          
        </div>
        <div class="block w-full overflow-x-auto p-2">
          <!-- Projects table -->
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
        </div>
      </div>
    </div>
  </div>
</div>


{{-- <div class="card">
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
</div> --}}

@endsection