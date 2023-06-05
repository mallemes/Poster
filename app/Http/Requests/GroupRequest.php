<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => ['required'],
            'slug' => ['required'],
            'user_id' => ['required', 'integer'],
            'description' => ['required'],
            'status' => ['required'],
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
