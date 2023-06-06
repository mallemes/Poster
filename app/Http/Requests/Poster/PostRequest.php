<?php

namespace App\Http\Requests\Poster;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'content' => 'nullable',
            'file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_published' => 'required|boolean',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
