<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KegiatanRequest extends FormRequest
{
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
            'nama_kegiatan' => 'required',
            'tanggal_mulai' => 'required',
            'tanggal_akhir' => 'required',
            'deskripsi' => 'required',
            'thumbnail' => 'required',
        ];
    }

    public function message() :array
    {
        return [
            'nama_kategori.required' => 'Nama kategori harus terisi'
        ];
    }
}
