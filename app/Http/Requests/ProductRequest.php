<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
            'name' => ['required', 'min:5', 'unique:products,name,' . optional($this->product)->id],
            'description' => ['nullable', 'min:5'],
            'image' => ['nullable', 'image', 'mimes:png,jpg,jpeg', 'max:1024'],
            'category_id' => ['nullable'],
            'brand_id' => ['nullable'],
            'price' => ['nullable', 'numeric'],
            'stock' => ['nullable', 'numeric'],
            'slug' => ['nullable']
        ];
    }
}
