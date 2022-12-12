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
               {{ trans('global.edit') }} {{ trans('cruds.pageCustomField.title_singular') }}
              </h3>
            </div>
          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0 bg-blueGray-100">
            
              <form method="POST" action="{{ route("admin.page-custom-fields.update", [$pageCustomField->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="mb-3 mt-3">
                <div class="form-group">
                    <label class="required block uppercase text-blueGray-600 text-xs font-bold mb-2" for="field_lable">{{ trans('cruds.pageCustomField.fields.field_lable') }}</label>
                    <input class=" form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('field_lable') ? 'is-invalid' : '' }}" type="text" name="field_lable" id="field_lable" value="{{ old('field_lable', $pageCustomField->field_lable) }}" required>
                    @if($errors->has('field_lable'))
                        <div class="invalid-feedback">
                            {{ $errors->first('field_lable') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.pageCustomField.fields.field_lable_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label class="required block uppercase text-blueGray-600 text-xs font-bold mb-2" for="field_value">{{ trans('cruds.pageCustomField.fields.field_value') }}</label>
                    <input class=" form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('field_value') ? 'is-invalid' : '' }}" type="text" name="field_value" id="field_value" value="{{ old('field_value', $pageCustomField->field_value) }}" required>
                    @if($errors->has('field_value'))
                        <div class="invalid-feedback">
                            {{ $errors->first('field_value') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.pageCustomField.fields.field_value_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.pageCustomField.fields.type') }}</label>
                    <select class=" form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('type') ? 'is-invalid' : '' }}" name="type" id="type">
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
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="page_id" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.pageCustomField.fields.page') }}</label>
                    <select class=" form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 select2 {{ $errors->has('page') ? 'is-invalid' : '' }}" name="page_id" id="page_id">
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
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="what_we_do_id" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.pageCustomField.fields.what_we_do') }}</label>
                    <select class=" form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 select2 {{ $errors->has('what_we_do') ? 'is-invalid' : '' }}" name="what_we_do_id" id="what_we_do_id">
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
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="case_study_custom_id" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.pageCustomField.fields.case_study_custom') }}</label>
                    <select class=" form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 select2 {{ $errors->has('case_study_custom') ? 'is-invalid' : '' }}" name="case_study_custom_id" id="case_study_custom_id">
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
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="knowledge_custom_id" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.pageCustomField.fields.knowledge_custom') }}</label>
                    <select class=" form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 select2 {{ $errors->has('knowledge_custom') ? 'is-invalid' : '' }}" name="knowledge_custom_id" id="knowledge_custom_id">
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
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="team_custom_id" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.pageCustomField.fields.team_custom') }}</label>
                    <select class="form-control select2 {{ $errors->has('team_custom') ? 'is-invalid' : '' }}" name="team_custom_id" id="team_custom_id">
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
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <button class="btn btn-indigo mr-2" type="submit">
                        Save
                        </button>
                </div>
            </div>
        </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection