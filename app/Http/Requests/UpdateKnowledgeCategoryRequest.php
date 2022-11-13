<?php

namespace App\Http\Requests;

use App\Models\KnowledgeCategory;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateKnowledgeCategoryRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('knowledge_category_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'slug' => [
                'string',
                'nullable',
            ],
        ];
    }
}
