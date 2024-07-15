<?php

namespace App\Http\Requests\Auth;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'first_name' => 'required|string|max:155',
            'last_name' => 'required|string|max:155',
            'email' => 'required|email|unique:App\Models\User,email|min:8|max:50',
            'phone_number' => 'required|unique:App\Models\User,phone_number|regex:/(08)[0-9]/|max:13',
            'password' => ['required', Password::min(8)->mixedCase()->numbers()->symbols()]
        ];
    }

    public function messages()
    {
        return [
            'password.required' => 'Kata sandi wajib diisi.',
            'password.min' => 'Kata sandi setidaknya terdiri atas 8 karakter.',
            'phone_number.unique' => 'Nomor telepon sudah terdaftar dengan akun lain. Silakan gunakan nomor telepon lain.',
            'phone_number.required' => 'Nomor telepon wajib diisi dan dimulai dengan "08."',
            'phone_number.max' => 'Panjang nomor telepon maksimal 13 angka.',
            'email.unique' => 'Email sudah terdaftar.',
        ];
    }
}
