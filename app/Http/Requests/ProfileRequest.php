<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required'],
            'description' => ['required', 'min:10'],
            'image' => ['image', 'mimes:png,jpg,jpg', 'max:1024'],
            'hari_buka' => ['required'],
            'hari_sampai' => ['required'],
            'jam_buka' => ['required'],
            'jam_tutup' => ['required'],
            'whatsapp' => ['required', 'numeric'],
            'telephone' => ['required', 'numeric'],
            'message' => ['required', 'min:10'],
        ];
    }
}
