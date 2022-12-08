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
               {{ trans('global.show') }} {{ trans('cruds.whatWeDo.title') }}
              </h3>
            </div>
          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0 " style="background-color:#F0F4F8 !important">
        
             <form method="POST" action="{{ route("admin.what-we-dos.update", [$whatWeDo->id]) }}" enctype="multipart/form-data">
            @method('PUT')
            @csrf
            <div class="body">
                <div class="mb-3 mt-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2 " for="title">{{ trans('cruds.whatWeDo.fields.title') }}</label>
                    <div class="form-group">
                        
                        <input readonly class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $whatWeDo->title) }}" required>
                        @if($errors->has('title'))
                            <div class="invalid-feedback">
                                {{ $errors->first('title') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.whatWeDo.fields.title_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="excerpt" class="block uppercase text-blueGray-600 text-xs font-bold mb-2 ">{{ trans('cruds.whatWeDo.fields.excerpt') }}</label>
                    <div class="form-group">
                        
                        <textarea class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 rows="4" cols="160" {{ $errors->has('excerpt') ? 'is-invalid' : '' }}" name="excerpt" id="excerpt">{{ old('excerpt', $whatWeDo->excerpt) }}</textarea>
                        @if($errors->has('excerpt'))
                            <div class="invalid-feedback">
                                {{ $errors->first('excerpt') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.whatWeDo.fields.excerpt_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="page_text" class="block uppercase text-blueGray-600 text-xs font-bold mb-2 ">{{ trans('cruds.whatWeDo.fields.page_text') }}</label>
                    <div class="form-group">
                        
                        <textarea class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 ckeditor {{ $errors->has('page_text') ? 'is-invalid' : '' }}" name="page_text" id="page_text">{!! old('page_text', $whatWeDo->page_text) !!}</textarea>
                        @if($errors->has('page_text'))
                            <div class="invalid-feedback">
                                {{ $errors->first('page_text') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.whatWeDo.fields.page_text_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="featured_image" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.whatWeDo.fields.featured_image') }}</label>
                    <div class="form-group">
                        
                        <div class="needsclick dropzone {{ $errors->has('featured_image') ? 'is-invalid' : '' }}" id="featured_image-dropzone">
                        </div>
                        @if($errors->has('featured_image'))
                            <div class="invalid-feedback">
                                {{ $errors->first('featured_image') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.whatWeDo.fields.featured_image_helper') }}</span>
                    </div>
                <div>
                <div class="mb-3">
                    <label for="logo" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">Title Image</label>
                    <div class="form-group">
                        
                        <input readonly type="file" name="title_image" class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150" value="{{$whatWeDo->title_image}}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="cta_button_text" class="text-xs required ">{{ trans('cruds.whatWeDo.fields.cta_button_text') }}</label>        
                    <div class="form-group">
                        
                        <input readonly class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('cta_button_text') ? 'is-invalid' : '' }}" type="text" name="cta_button_text" id="cta_button_text" value="{{ old('cta_button_text', $whatWeDo->cta_button_text) }}">
                        @if($errors->has('cta_button_text'))
                            <div class="invalid-feedback">
                                {{ $errors->first('cta_button_text') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.whatWeDo.fields.cta_button_text_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    
                        <div class="form-check {{ $errors->has('featured') ? 'is-invalid' : '' }}">
                            <input readonly type="hidden" name="featured" value="0">
                            <input readonly class="form-check-input" type="checkbox" name="featured" id="featured" value="1" {{ $whatWeDo->featured || old('featured', 0) === 1 ? 'checked' : '' }}>
                            <label class="form-check-label" for="featured">{{ trans('cruds.caseStudy.fields.featured') }}</label>
                        </div>
                        @if($errors->has('featured'))
                            <div class="invalid-feedback">
                                {{ $errors->first('featured') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.caseStudy.fields.featured_helper') }}</span>
                    
                </div>
                <div class="mb-3">
                    <label for="cta_url" class="block uppercase text-blueGray-600 text-xs font-bold mb-2 ">{{ trans('cruds.whatWeDo.fields.cta_url') }}</label>
                    <div class="form-group">
                        
                        <input readonly class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('cta_url') ? 'is-invalid' : '' }}" type="text" name="cta_url" id="cta_url" value="{{ old('cta_url', $whatWeDo->cta_url) }}">
                        @if($errors->has('cta_url'))
                            <div class="invalid-feedback">
                                {{ $errors->first('cta_url') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.whatWeDo.fields.cta_url_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="case_study_id" class="block uppercase text-blueGray-600 text-xs font-bold mb-2 ">{{ trans('cruds.whatWeDo.fields.case_study') }}</label>
                    <div class="form-group">
                        
                         <input readonly class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('cta_url') ? 'is-invalid' : '' }}" type="text" name="cta_url" id="cta_url" value="">
                        @if($errors->has('case_study'))
                            <div class="invalid-feedback">
                                {{ $errors->first('case_study') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.whatWeDo.fields.case_study_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.whatWeDo.fields.status') }}</label>
                    <div class="form-group">
                        
                        <select class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                            <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                            @foreach(App\Models\WhatWeDo::STATUS_SELECT as $key => $label)
                                <option value="{{ $key }}" {{ old('status', $whatWeDo->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                            @endforeach
                        </select>
                        @if($errors->has('status'))
                            <div class="invalid-feedback">
                                {{ $errors->first('status') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.whatWeDo.fields.status_helper') }}</span>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="slug" class="block uppercase text-blueGray-600 text-xs font-bold mb-2 ">{{ trans('cruds.whatWeDo.fields.slug') }}</label>
                    <div class="form-group">
                        
                        <input readonly class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', $whatWeDo->slug) }}">
                        @if($errors->has('slug'))
                            <div class="invalid-feedback">
                                {{ $errors->first('slug') }}
                            </div>
                        @endif
                        <span class="help-block">{{ trans('cruds.whatWeDo.fields.slug_helper') }}</span>
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