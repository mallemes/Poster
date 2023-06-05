<?php

namespace App\Http\Requests\Poster\Auth;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'username' => 'required |exists:users,username',
            'password' => 'required',
        ];
    }
}
