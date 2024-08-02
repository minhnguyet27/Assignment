<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:255|min:2',
            'email' => 'required|email|exits:users',
            'password' => 'required|min:3|confirmed',
        ];
    }
    public function messages(): array
    {
        return [
            'name.required' => 'Tên là bắt buộc.',
            'name.min' => 'Tên phải có ít nhất 2 ký tự.',
            'email.required' => 'Email là bắt buộc.',
            'email.email' => 'Email phải đúng định dạng.',
            'email.exits' => 'Email không tồn tại trong hệ thống.',
            'password.required' => 'Mật khẩu là bắt buộc.',
            'password.min' => 'Mật khẩu phải có ít nhất 8 ký tự.',
            'password.confirmed' => 'Mật khẩu xác nhận không khớp.',
        ];
    }
}