<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RequestStoreSettings extends FormRequest
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
        return [
            'fb' => 'required',
            'twt' => 'required',
            'ig' => 'required',
            'google' => 'required',
            'linked' => 'required',
            'yt' => 'required',
            'site_title' => 'required',
            'longitude_latitude' => 'required',
            'address' => 'required',
            'telp' => 'required',
        ];
    }

    public function attributes()
    {
        return [
            'fb' => 'Facebook',
            'twt' => 'Twitter',
            'ig' => 'Instagram',
            'google' => 'Google',
            'linked' => 'Linkedin',
            'yt' => 'Youtube',
            'site_title' => 'Site Title',
            'longitude_latitude' => 'Longitude Latitude',
            'address' => 'Address',
            'telp' => 'Telephone',
        ];
    }
}
