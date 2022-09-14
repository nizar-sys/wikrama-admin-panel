<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStoreOrUpdateInformasi extends FormRequest
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
            'title' => 'required|max:255',
            'media' => 'image|mimes:jpeg,png,jpg,gif,svg|max:20348',
            'status' => 'required|integer',
        ];

        if($this->isMethod('POST')){
            $rules['media'] .= '|required';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'title.required' => 'Judul informasi harus diisi',
            'title.max' => 'Judul informasi maksimal 255 karakter',
            'media.required' => 'Media informasi harus diisi',
            'media.image' => 'Media informasi harus berupa gambar',
            'media.mimes' => 'Media informasi harus berupa gambar',
            'media.max' => 'Media informasi maksimal 20MB',
            'status.required' => 'Status harus diisi',
            'status.integer' => 'Status harus berupa angka',
        ];
    }
}
