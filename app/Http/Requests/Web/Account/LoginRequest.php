<?php

namespace App\Http\Requests\Web\Account;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'email' => 'required',
            'password' => 'required|string',
        ];
    }
    

    public function messages()
    {
        return [
            'email.required' => 'Vui lòng nhập email mà bạn đã đăng ký.',
            'password.required' => 'Vui lòng nhập mật khẩu.'
        ];
    }
}