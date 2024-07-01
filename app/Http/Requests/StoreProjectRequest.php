<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'project_name' => 'required|string|max:100',
            'description' => 'nullable|string',
            // 他のバリデーションルールをここに追加
        ];
    }
}
