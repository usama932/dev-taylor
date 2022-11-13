<?php

namespace App\Http\Requests;

use App\Models\Slide;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreSlideRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('slide_create');
    }

    public function rules()
    {
        return [
            'title' => [
                'string',
                'required',
            ],
            'imagetitle' => [
                'string',
                'nullable',
            ],
            'cta_button' => [
                'string',
                'nullable',
            ],
            'url' => [
                'string',
                'nullable',
            ],
            'slider_id' => [
                'required',
                'integer',
            ],
        ];
    }
}
