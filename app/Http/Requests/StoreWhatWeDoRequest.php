<?php

namespace App\Http\Requests;

use App\Models\WhatWeDo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreWhatWeDoRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('what_we_do_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'cta_button_text' => [
                'string',
                'nullable',
            ],
            'cta_url' => [
                'string',
                'nullable',
            ],
            'slug' => [
                'string',
                'nullable',
            ],
        ];
    }
}
