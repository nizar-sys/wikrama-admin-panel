<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStoreOrUpdatePosts extends FormRequest
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
            'page_id' => 'required|exists:pages,id',
            'title' => 'required|max:255',
            'content' => 'required',
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
            'page_id' => 'Page',
            'title' => 'Title',
            'content' => 'Content',
            'media' => 'Media',
            'status' => 'Status'
        ];
    }
}
