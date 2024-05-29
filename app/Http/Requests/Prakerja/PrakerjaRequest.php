<?php

namespace App\Http\Requests\Prakerja;

use Illuminate\Foundation\Http\FormRequest;

class PrakerjaRequest extends FormRequest
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
            'nama' => 'required',
            'email' => 'required|email',
            'telpon' => 'required',
            'alamat' => 'required',
            'pendidikan_terakhir' => 'required',
            'foto_user' => 'required|mimes:jpg,jpeg,png',
        ];
    }

    public function messages(): array{
        return [
            'nama.required' => 'Nama tidak boleh kosong',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Pastikan yang di masukkan email',
            'telpon.required' => 'Nomor telpon tidak boleh kosong',
            'alamat.required' => 'Alamat tidak boleh kosong',
            'pendidikan_terakhir.required' => 'Pendidikan terakhir tidak boleh kosong',
            'foto_user.mimes' => 'Pastikan format file JPG, JPEG dan PNG'
        ];
    }
}
