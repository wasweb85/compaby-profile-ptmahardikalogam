<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nama' => ['required', 'string', 'max:100'],
            'email' => ['required', 'email', 'max:100'],
            'telepon' => ['required', 'string', 'max:25'],
            'perusahaan' => ['nullable', 'string', 'max:100'],
            'pesan' => ['required', 'string', 'max:2000'],
        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes(): array
    {
        return [
            'nama' => 'Nama Lengkap',
            'email' => 'Alamat Email',
            'telepon' => 'Nomor Telepon / WhatsApp',
            'perusahaan' => 'Nama Perusahaan',
            'pesan' => 'Pesan',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'nama.required' => 'Nama lengkap wajib diisi.',
            'email.required' => 'Alamat email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'telepon.required' => 'Nomor telepon / WhatsApp wajib diisi.',
            'pesan.required' => 'Pesan atau kebutuhan material wajib diisi.',
        ];
    }
}
