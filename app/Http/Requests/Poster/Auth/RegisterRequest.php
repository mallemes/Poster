<?php

namespace App\Http\Requests\Poster\Auth;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'firstname' => 'required | string | max: 255',
            'surname' => 'string | max: 255',
            'username' => 'required | string | max: 255 |unique:users| regex:/^[a-zA-Z0-9_]+$/',
            'email' => 'required | email | max: 255 | unique:users',
            'password' => 'required | min: 6 | confirmed',
            'day' => 'integer | min: 1 | max: 31',
            'month' => 'integer | min: 1 | max: 12',
            'year' => 'integer |min: 1900 | max: 2021',
        ];
    }
}
