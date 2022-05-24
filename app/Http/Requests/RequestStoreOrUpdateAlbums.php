<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStoreOrUpdateAlbums extends FormRequest
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
            'description' => 'required',
            'media' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'status' => 'required|integer'
        ];

        if($this->isMethod("POST")){
            $rules['media'] .= '|required';
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'title' => 'Title',
            'description' => 'Description',
            'media' => 'Media',
            'status' => 'Status'
        ];
    }
}
