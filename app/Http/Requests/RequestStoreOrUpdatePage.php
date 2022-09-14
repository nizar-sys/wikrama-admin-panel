<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStoreOrUpdatePage extends FormRequest
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
            'link' => 'required|string|max:255',
            'media' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'content' => 'required|string|max:65535',
            'seo_key' => 'required|string|max:255',
            'seo_desc' => 'required|string|max:255',
            'status' => 'required|numeric',
        ];

        if($this->isMethod('POST')){
            $rules['media'] .= '|required';
        }

        return $rules;
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array<string, string>
     */
    public function attributes()
    {
        return [
            'title' => 'Title',
            'subtitle' => 'Subtitle',
            'link' => 'Link',
            'media' => 'Media',
            'content' => 'Content',
            'seo_key' => 'SEO Key',
            'seo_desc' => 'SEO Description',
            'status' => 'Status',
        ];
    }
}
