<?php

namespace App\Http\Requests\Poster;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'slug' => ['required', 'unique:groups', 'max: 20', 'min: 5', 'regex:/^[a-z0-9-_]+$/i'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
            'description' => ['required', 'max: 255'],
            'status' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
