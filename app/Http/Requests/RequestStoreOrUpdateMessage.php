<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStoreOrUpdateMessage extends FormRequest
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
            'name' => 'required|max:255',
            'email' => 'required',
            'message' => 'required'
        ];

        if($this->isMethod("PUT")){
            $rules['status'] = 'required';
        }

        return $rules;
    }

    public function attributes()
    {
        return [
            'name' => 'Name',
            'email' => 'Email',
            'message' => 'Message',
            'status' => 'Status'
        ];
    }
}
