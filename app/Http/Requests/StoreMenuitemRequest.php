<?php

namespace App\Http\Requests;

use App\Models\Menuitem;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreMenuitemRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('menuitem_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
            'menu_id' => [
                'required',
                'integer',
            ],
            'link_to' => [
                'string',
                'nullable',
            ],
        ];
    }
}
