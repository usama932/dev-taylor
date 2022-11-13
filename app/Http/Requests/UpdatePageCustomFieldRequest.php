<?php

namespace App\Http\Requests;

use App\Models\PageCustomField;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdatePageCustomFieldRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('page_custom_field_edit');
    }

    public function rules()
    {
        return [
            'field_lable' => [
                'string',
                'required',
            ],
            'field_value' => [
                'string',
                'required',
            ],
        ];
    }
}
