<?php

namespace App\Http\Requests;

use App\Models\KnowledgeTag;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyKnowledgeTagRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('knowledge_tag_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:knowledge_tags,id',
        ];
    }
}
