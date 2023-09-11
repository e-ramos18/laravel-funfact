<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username' => 'required',
            'email' => 'required|email|unique:users',
            'phone_number' => 'required|regex:/^[0-9]{10}$/|unique:users',
            'password' => 'required|min:6|confirmed',
        ];
    }
}
