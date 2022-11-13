<?php

namespace App\Http\Requests;

use App\Models\KnowledgeCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyKnowledgeCategoryRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('knowledge_category_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:knowledge_categories,id',
        ];
    }
}
