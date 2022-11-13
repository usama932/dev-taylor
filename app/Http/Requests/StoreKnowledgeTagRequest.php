<?php

namespace App\Http\Requests;

use App\Models\KnowledgeTag;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreKnowledgeTagRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('knowledge_tag_create');
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
