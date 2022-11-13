@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.create') }} {{ trans('cruds.menuitem.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.menuitems.store") }}" enctype="multipart/form-data">
                        @method('POST')
                        @csrf
                        <div class="form-group">
                            <label for="name">{{ trans('cruds.menuitem.fields.name') }}</label>
                            <input class="form-control" type="text" name="name" id="name" value="{{ old('name', '') }}">
                            @if($errors->has('name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('name') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.menuitem.fields.name_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="menu_id">{{ trans('cruds.menuitem.fields.menu') }}</label>
                            <select class="form-control select2" name="menu_id" id="menu_id" required>
                                @foreach($menus as $id => $entry)
                                    <option value="{{ $id }}" {{ old('menu_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('menu'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('menu') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.menuitem.fields.menu_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="page_link_id">{{ trans('cruds.menuitem.fields.page_link') }}</label>
                            <select class="form-control select2" name="page_link_id" id="page_link_id">
                                @foreach($page_links as $id => $entry)
                                    <option value="{{ $id }}" {{ old('page_link_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('page_link'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('page_link') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.menuitem.fields.page_link_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="link_to">{{ trans('cruds.menuitem.fields.link_to') }}</label>
                            <input class="form-control" type="text" name="link_to" id="link_to" value="{{ old('link_to', '') }}">
                            @if($errors->has('link_to'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('link_to') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.menuitem.fields.link_to_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="parent_id">{{ trans('cruds.menuitem.fields.parent') }}</label>
                            <select class="form-control select2" name="parent_id" id="parent_id">
                                @foreach($parents as $id => $entry)
                                    <option value="{{ $id }}" {{ old('parent_id') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('parent'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('parent') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.menuitem.fields.parent_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-danger" type="submit">
                                {{ trans('global.save') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection