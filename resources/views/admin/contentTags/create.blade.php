@extends('layouts.admin')
@section('content')

<div class="main-card">
    <div class="header">
        {{ trans('global.create') }} {{ trans('cruds.contentTag.title_singular') }}
    </div>

    <div class="body">
        <form method="POST" action="{{ route("admin.content-tags.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <div class="form-group">
                    <label class="required" class="text-xs " for="name">{{ trans('cruds.contentTag.fields.name') }}</label>
                    <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                    @if($errors->has('name'))
                        <div class="invalid-feedback">
                            {{ $errors->first('name') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.contentTag.fields.name_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="slug" class="text-xs ">{{ trans('cruds.contentTag.fields.slug') }}</label>
                    <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', '') }}">
                    @if($errors->has('slug'))
                        <div class="invalid-feedback">
                            {{ $errors->first('slug') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.contentTag.fields.slug_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <button class="btn btn-danger" type="submit">
                        {{ trans('global.save') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
</div>



@endsection