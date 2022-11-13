<?php

namespace App\Http\Requests;

use App\Models\Knowledge;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyKnowledgeRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('knowledge_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:knowledges,id',
        ];
    }
}
