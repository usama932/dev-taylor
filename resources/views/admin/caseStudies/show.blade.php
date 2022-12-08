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
                {{ trans('global.view') }} {{ trans('cruds.caseStudy.title_singular') }}
              </h3>
            </div>
          </div>
        </div>
        <div class="flex-auto px-4 lg:px-10 py-10 pt-0" style="background-color:#F0F4F8 !important">
       
             <form method="POST" action="{{ route("admin.case-studies.update", [$caseStudy->id]) }}" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="body">
            <div class="mb-3 mt-3">
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2"" for="title">{{ trans('cruds.caseStudy.fields.title') }}</label>
                <div class="form-group">
                
                    <input readonly class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150{{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', $caseStudy->title) }}" required>
                    @if($errors->has('title'))
                        <div class="invalid-feedback">
                            {{ $errors->first('title') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.title_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <label for="subtitle" class="block uppercase text-blueGray-600 text-xs font-bold mb-2"">{{ trans('cruds.caseStudy.fields.subtitle') }}</label>
                <div class="form-group">
                
                    <input readonly class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('subtitle') ? 'is-invalid' : '' }}" type="text" name="subtitle" id="subtitle" value="{{ old('subtitle', $caseStudy->subtitle) }}">
                    @if($errors->has('subtitle'))
                        <div class="invalid-feedback">
                            {{ $errors->first('subtitle') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.subtitle_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <label for="content" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.caseStudy.fields.content') }}</label>
                <div class="form-group">
                    
                    <textarea class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 ckeditor {{ $errors->has('content') ? 'is-invalid' : '' }}" name="content" id="content">{!! old('content', $caseStudy->content) !!}</textarea>
                    @if($errors->has('content'))
                        <div class="invalid-feedback">
                            {{ $errors->first('content') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.content_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <label for="logo" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.caseStudy.fields.logo') }}</label>
                <div class="form-group">
                    
                    <div class="needsclick    border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150dropzone {{ $errors->has('logo') ? 'is-invalid' : '' }}" id="logo-dropzone">
                    </div>
                    @if($errors->has('logo'))
                        <div class="invalid-feedback">
                            {{ $errors->first('logo') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.logo_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <label for="featuredtitle" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.caseStudy.fields.featuredtitle') }}</label>
                <div class="form-group">
                    
                    <input  readonly class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('featuredtitle') ? 'is-invalid' : '' }}" type="text" name="featuredtitle" id="featuredtitle" value="{{ old('featuredtitle', $caseStudy->featuredtitle) }}">
                    @if($errors->has('featuredtitle'))
                        <div class="invalid-feedback">
                            {{ $errors->first('featuredtitle') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.featuredtitle_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <div class="form-group">
                    <label for="featuredimage" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.caseStudy.fields.featuredimage') }}</label>
                    <div class="needsclick  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 dropzone {{ $errors->has('featuredimage') ? 'is-invalid' : '' }}" id="featuredimage-dropzone">
                    </div>
                    @if($errors->has('featuredimage'))
                        <div class="invalid-feedback">
                            {{ $errors->first('featuredimage') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.featuredimage_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <label for="cta_button" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.caseStudy.fields.cta_button') }}</label>
                <div class="form-group">
                    
                    <input readonly class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('cta_button') ? 'is-invalid' : '' }}" type="text" name="cta_button" id="cta_button" value="{{ old('cta_button', $caseStudy->cta_button) }}">
                    @if($errors->has('cta_button'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cta_button') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.cta_button_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <label for="cst_link" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.caseStudy.fields.cst_link') }}</label>
                <div class="form-group">
                
                    <input  readonly class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('cst_link') ? 'is-invalid' : '' }}" type="text" name="cst_link" id="cst_link" value="{{ old('cst_link', $caseStudy->cst_link) }}">
                    @if($errors->has('cst_link'))
                        <div class="invalid-feedback">
                            {{ $errors->first('cst_link') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.cst_link_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
               
                    <div class="form-check {{ $errors->has('featured') ? 'is-invalid' : '' }}">
                        <input  readonly type="hidden" name="featured" value="0">
                        <input readonly class="form-check-input" type="checkbox" name="featured" id="featured" value="1" {{ $caseStudy->featured || old('featured', 0) === 1 ? 'checked' : '' }}>
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
                <label class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.caseStudy.fields.status') }}</label>
                <div class="form-group">
                
                    <select class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('status') ? 'is-invalid' : '' }}" name="status" id="status">
                        <option value disabled {{ old('status', null) === null ? 'selected' : '' }}>{{ trans('global.pleaseSelect') }}</option>
                        @foreach(App\Models\CaseStudy::STATUS_SELECT as $key => $label)
                            <option value="{{ $key }}" {{ old('status', $caseStudy->status) === (string) $key ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                    @if($errors->has('status'))
                        <div class="invalid-feedback">
                            {{ $errors->first('status') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.status_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <label for="slug" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.caseStudy.fields.slug') }}</label>
                <div class="form-group">
                
                    <input readonly class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('slug') ? 'is-invalid' : '' }}" type="text" name="slug" id="slug" value="{{ old('slug', $caseStudy->slug) }}">
                    @if($errors->has('slug'))
                        <div class="invalid-feedback">
                            {{ $errors->first('slug') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.slug_helper') }}</span>
                </div>
            </div>
            <div class="mb-3">
                <label for="orderby" class="block uppercase text-blueGray-600 text-xs font-bold mb-2">{{ trans('cruds.caseStudy.fields.orderby') }}</label>
                <div class="form-group">
                
                    <input readonly class="form-control  border-0 px-3 py-3 placeholder-blueGray-300 text-blueGray-600 bg-white rounded text-sm shadow focus:outline-none focus:ring w-full ease-linear transition-all duration-150 {{ $errors->has('orderby') ? 'is-invalid' : '' }}" type="number" name="orderby" id="orderby" value="{{ old('orderby', $caseStudy->orderby) }}" step="1">
                    @if($errors->has('orderby'))
                        <div class="invalid-feedback">
                            {{ $errors->first('orderby') }}
                        </div>
                    @endif
                    <span class="help-block">{{ trans('cruds.caseStudy.fields.orderby_helper') }}</span>
                </div>
            </div>
            {{-- <div class="mb-3">
              <div class="form-group">
                    <button class="btn btn-indigo mr-2" type="submit">
                        Save
                    </button>
                  </div>
            </div> --}}
        </div>
    </form>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection