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
                {{ trans('global.create') }} {{ trans('cruds.knowledgeTag.title_singular') }}
              </h3>
            </div>
          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-blueGray-100">
              <form method="POST" action="{{ route("admin.knowledge-tags.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="body">
                <div class="mb-3 mt-3">
                    <div class="form-group">
                        <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 required" for="name">{{ trans('cruds.knowledgeTag.fields.name') }}</label>
                        <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.knowledgeTag.fields.name_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3 mt-3">
                    <div class="form-group">
                        <label for="slug" class="block uppercase text-blueGray-600 text-xs font-bold mb-2 required">{{ trans('cruds.knowledgeTag.fields.slug') }}</label>
                        <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', '') }}">
                        @if($errors->has('slug'))
                            <div class="invalid-feedback">
                                {{ $errors->first('slug') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.knowledgeTag.fields.slug_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                    <button class="btn btn-indigo mr-2" type="submit">
                        Save
                    </button>
                    </div>
                </div>
            </div>
        </form>
    
        </div>
      </div>
    </div>
  </div>
</div>

@endsection