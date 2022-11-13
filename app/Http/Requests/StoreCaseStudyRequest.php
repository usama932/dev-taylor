<?php

namespace App\Http\Requests;

use App\Models\CaseStudy;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreCaseStudyRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('case_study_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'subtitle' => [
                'string',
                'nullable',
            ],
            'featuredtitle' => [
                'string',
                'nullable',
            ],
            'cta_button' => [
                'string',
                'nullable',
            ],
            'cst_link' => [
                'string',
                'nullable',
            ],
            'slug' => [
                'string',
                'nullable',
            ],
            'orderby' => [
                'nullable',
                'integer',
                'min:-2147483648',
                'max:2147483647',
            ],
        ];
    }
}
