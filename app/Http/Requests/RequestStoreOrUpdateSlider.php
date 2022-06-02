<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStoreOrUpdateSlider extends FormRequest
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
            'title' => 'required|string|max:255',
            'subtitle' => 'required|string|max:255',
            'media' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'position' => 'required|string',
            'status' => 'required|numeric',
        ];

        if($this->isMethod('POST')){
            $rules['media'] .= '|required';
        }

        return $rules;
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages()
    {
        return [
            'title.required' => "Judul media harus diisi",
            'title.string' => "Judul media harus berupa string",
            'title.max' => "Judul media maksimal 255 karakter",
            'subtitle.required' => "Subjudul media harus diisi",
            'subtitle.string' => "Subjudul media harus berupa string",
            'subtitle.max' => "Subjudul media maksimal 255 karakter",
            'media.image' => "Media harus berupa gambar",
            'media.mimes' => "Media harus berupa gambar",
            'media.max' => "Media maksimal 2048 karakter",
            'position.required' => "Posisi media harus diisi",
            'position.string' => "Posisi media harus berupa string",
            'status.required' => "Status media harus diisi",
            'status.numeric' => "Status media tidak valid",
        ];
    }
}
