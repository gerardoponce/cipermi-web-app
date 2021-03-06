<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductRequest extends FormRequest
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
            'codigo' => [
                'required', 'integer', 'min:1',
                Rule::unique('products', 'codigo')->ignore($this->product),
            ],
            'nombre' => [
                'required', 'string',
                Rule::unique('products', 'nombre')->ignore($this->product),
            ],
            'descripcion' => 'nullable|string',
            'stock' => 'required|numeric|min:0',
            'precio' => 'required|numeric|between:0,9999.99',
            'imagen_portada' => [
                'nullable', 'image:jpeg,png,jpg,gif,svg', 'max:2048'
            ],
            'alt_imagen_portada' => 'nullable',
        ];
    }
}
