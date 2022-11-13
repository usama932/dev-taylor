<?php

namespace App\Http\Requests;

use App\Models\Navigationmenu;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateNavigationmenuRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('navigationmenu_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
        ];
    }
}
