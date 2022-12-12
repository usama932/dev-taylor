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
               {{ trans('global.edit') }} {{ trans('cruds.menuitem.title_singular') }}
              </h3>
            </div>
          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-blueGray-100">
              <form method="POST" action="{{ route("admin.menuitems.update", [$menuitem->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="form-group mb-2 mt-3">
                <label for="name">{{ trans('cruds.menuitem.fields.name') }}</label>
                <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', $menuitem->name) }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.menuitem.fields.name_helper') }}</span>
            </div>
            <div class="form-group mb-2">
                <label class="required" for="menu_id">{{ trans('cruds.menuitem.fields.menu') }}</label>
                <select class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 select2 {{ $errors->has('menu') ? 'is-invalid' : '' }}" name="menu_id" id="menu_id" required>
                    @foreach($menus as $id => $entry)
                        <option value="{{ $id }}" {{ (old('menu_id') ? old('menu_id') : $menuitem->menu->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('menu'))
                    <div class="invalid-feedback">
                        {{ $errors->first('menu') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.menuitem.fields.menu_helper') }}</span>
            </div>
            <div class="form-group mb-2">
                <label for="page_link_id">{{ trans('cruds.menuitem.fields.page_link') }}</label>
                <select class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 select2 {{ $errors->has('page_link') ? 'is-invalid' : '' }}" name="page_link_id" id="page_link_id">
                    @foreach($page_links as $id => $entry)
                        <option value="{{ $id }}" {{ (old('page_link_id') ? old('page_link_id') : $menuitem->page_link->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('page_link'))
                    <div class="invalid-feedback">
                        {{ $errors->first('page_link') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.menuitem.fields.page_link_helper') }}</span>
            </div>
            <div class="form-group mb-2">
                <label for="link_to">{{ trans('cruds.menuitem.fields.link_to') }}</label>
                <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('link_to') ? 'is-invalid' : '' }}" type="text" name="link_to" id="link_to" value="{{ old('link_to', $menuitem->link_to) }}">
                @if($errors->has('link_to'))
                    <div class="invalid-feedback">
                        {{ $errors->first('link_to') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.menuitem.fields.link_to_helper') }}</span>
            </div>
            <div class="form-group mb-2">
                <label for="parent_id">{{ trans('cruds.menuitem.fields.parent') }}</label>
                <select class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 select2 {{ $errors->has('parent') ? 'is-invalid' : '' }}" name="parent_id" id="parent_id">
                    @foreach($parents as $id => $entry)
                        <option value="{{ $id }}" {{ (old('parent_id') ? old('parent_id') : $menuitem->parent->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('parent'))
                    <div class="invalid-feedback">
                        {{ $errors->first('parent') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.menuitem.fields.parent_helper') }}</span>
            </div>
            <div class="form-group mb-2">
              <button class="btn btn-indigo mr-2" type="submit">
                  Save
                </button>
            </div>
        </form>
    
        </div>
      </div>
    </div>
  </div>
</div>

@endsection