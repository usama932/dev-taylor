<?php

namespace App\Http\Requests;

use App\Models\Location;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateLocationRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('location_edit');
    }

    public function rules()
    {
        return [
            'location_country' => [
                'string',
                'nullable',
            ],
            'location_phone' => [
                'string',
                'nullable',
            ],
            'location_addlink' => [
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
