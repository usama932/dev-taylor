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
               {{ trans('global.create') }} {{ trans('cruds.navigationmenu.title_singular') }}
              </h3>
            </div>
          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-blueGray-100">
          <form method="POST" action="{{ route("admin.navigationmenus.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-3 mt-3">
                <label for="name" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.navigationmenu.fields.name') }}</label>
                <input class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}">
                @if($errors->has('name'))
                    <div class="invalid-feedback">
                        {{ $errors->first('name') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.navigationmenu.fields.name_helper') }}</span>
            </div>
            <div class="form-group mb-3">
                <label for="parent_id" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.navigationmenu.fields.parent') }}</label>
                <select class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 select2 {{ $errors->has('parent') ? 'is-invalid' : '' }}" name="parent_id" id="parent_id">
                    @foreach($parents as $id => $entry)
                        <option value="{{ $id }}" {{ old('parent_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                    @endforeach
                </select>
                @if($errors->has('parent'))
                    <div class="invalid-feedback">
                        {{ $errors->first('parent') }}
                    </div>
                @endif
                <span class="help-block">{{ trans('cruds.navigationmenu.fields.parent_helper') }}</span>
            </div>
            <div class="form-group mb-3">
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