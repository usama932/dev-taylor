@extends('layouts.frontend')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

            <div class="card">
                <div class="card-header">
                    {{ trans('global.edit') }} {{ trans('cruds.pageCustomField.title_singular') }}
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route("frontend.page-custom-fields.update", [$pageCustomField->id]) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label class="required" for="field_lable">{{ trans('cruds.pageCustomField.fields.field_lable') }}</label>
                            <input class="form-control" type="text" name="field_lable" id="field_lable" value="{{ old('field_lable', $pageCustomField->field_lable) }}" required>
                            @if($errors->has('field_lable'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('field_lable') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.pageCustomField.fields.field_lable_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label class="required" for="field_value">{{ trans('cruds.pageCustomField.fields.field_value') }}</label>
                            <input class="form-control" type="text" name="field_value" id="field_value" value="{{ old('field_value', $pageCustomField->field_value) }}" required>
                            @if($errors->has('field_value'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('field_value') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.pageCustomField.fields.field_value_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label>{{ trans('cruds.pageCustomField.fields.type') }}</label>
                            <select class="form-control" name="type" id="type">
                                <option value disabled {{ old('type', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                                @foreach(App\Models\PageCustomField::TYPE_SELECT as $key => $label)
                                    <option value="{{ $key }}" {{ old('type', $pageCustomField->type) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('type'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('type') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.pageCustomField.fields.type_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="page_id">{{ trans('cruds.pageCustomField.fields.page') }}</label>
                            <select class="form-control select2" name="page_id" id="page_id">
                                @foreach($pages as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('page_id') ? old('page_id') : $pageCustomField->page->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('page'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('page') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.pageCustomField.fields.page_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="what_we_do_id">{{ trans('cruds.pageCustomField.fields.what_we_do') }}</label>
                            <select class="form-control select2" name="what_we_do_id" id="what_we_do_id">
                                @foreach($what_we_dos as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('what_we_do_id') ? old('what_we_do_id') : $pageCustomField->what_we_do->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('what_we_do'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('what_we_do') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.pageCustomField.fields.what_we_do_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="case_study_custom_id">{{ trans('cruds.pageCustomField.fields.case_study_custom') }}</label>
                            <select class="form-control select2" name="case_study_custom_id" id="case_study_custom_id">
                                @foreach($case_study_customs as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('case_study_custom_id') ? old('case_study_custom_id') : $pageCustomField->case_study_custom->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('case_study_custom'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('case_study_custom') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.pageCustomField.fields.case_study_custom_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="knowledge_custom_id">{{ trans('cruds.pageCustomField.fields.knowledge_custom') }}</label>
                            <select class="form-control select2" name="knowledge_custom_id" id="knowledge_custom_id">
                                @foreach($knowledge_customs as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('knowledge_custom_id') ? old('knowledge_custom_id') : $pageCustomField->knowledge_custom->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('knowledge_custom'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('knowledge_custom') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.pageCustomField.fields.knowledge_custom_helper') }}</span>
                        </div>
                        <div class="form-group">
                            <label for="team_custom_id">{{ trans('cruds.pageCustomField.fields.team_custom') }}</label>
                            <select class="form-control select2" name="team_custom_id" id="team_custom_id">
                                @foreach($team_customs as $id => $entry)
                                    <option value="{{ $id }}" {{ (old('team_custom_id') ? old('team_custom_id') : $pageCustomField->team_custom->id ?? '') == $id ? 'selected' : '' }}>{{ $entry }}</option>
                                @endforeach
                            </select>
                            @if($errors->has('team_custom'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('team_custom') }}
                                </div>
                            @endif
                            <span class="help-block">{{ trans('cruds.pageCustomField.fields.team_custom_helper') }}</span>
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