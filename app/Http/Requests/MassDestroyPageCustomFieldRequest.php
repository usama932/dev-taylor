<?php

namespace App\Http\Requests;

use App\Models\PageCustomField;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyPageCustomFieldRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('page_custom_field_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:page_custom_fields,id',
        ];
    }
}
