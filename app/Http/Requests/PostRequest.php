<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'title' => ['required'],
            'content' => ['required'],
            'user_id' => ['required', 'integer'],
            'is_published' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
