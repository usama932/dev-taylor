<?php

namespace App\Http\Requests;

use App\Models\WhatWeDo;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyWhatWeDoRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('what_we_do_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:what_we_dos,id',
        ];
    }
}
