@extends('layouts.admin')
@section('content')

<div class="main-card">
    <div class="header">
        {{ trans('global.create') }} {{ trans('cruds.knowledgeTag.title_singular') }}
    </div>

    
        <form method="POST" action="{{ route("admin.knowledge-tags.store") }}" enctype="multipart/form-data">
            @csrf
            <div class="body">
                <div class="mb-3">
                    <div class="form-group">
                        <label class="text-xs required" for="name">{{ trans('cruds.knowledgeTag.fields.name') }}</label>
                        <input class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" id="name" value="{{ old('name', '') }}" required>
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                {{ $errors->first('name') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.knowledgeTag.fields.name_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="form-group">
                        <label for="slug" class="text-xs required">{{ trans('cruds.knowledgeTag.fields.slug') }}</label>
                        <input class="form-control {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', '') }}">
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
                        <div class="footer">
                            <button type="submit" class="submit-button"> {{ trans('global.save') }}</button>
                        </div> 
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>



@endsection