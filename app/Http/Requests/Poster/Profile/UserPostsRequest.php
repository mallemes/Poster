<?php

namespace App\Http\Requests\Poster\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UserPostsRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'title' => 'nullable|string|max:255',
            'content' => 'nullable',
            'file' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'is_published' => 'nullable|boolean',
        ];
    }
}
