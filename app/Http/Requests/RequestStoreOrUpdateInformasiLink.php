<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStoreOrUpdateInformasiLink extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
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
        $rules = [
            'informasi_id' => 'required|exists:informasis,id',
            'title' => 'required|max:255',
            'url' => 'required|max:255',
            'status' => 'required|in:0,1'
        ];
        return $rules;
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        $messages = [
            'informasi_id.required' => 'Informasi tidak boleh kosong',
            'informasi_id.exists' => 'Informasi tidak ditemukan',
            'title.required' => 'Judul tidak boleh kosong',
            'title.max' => 'Judul maksimal 255 karakter',
            'url.required' => 'Url tidak boleh kosong',
            'url.max' => 'Url maksimal 255 karakter',
            'status.required' => 'Status tidak boleh kosong',
            'status.in' => 'Status tidak valid'
        ];
        return $messages;
    }
}
