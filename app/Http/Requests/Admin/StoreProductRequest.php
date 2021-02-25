<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
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
            'codigo' => 'required|string|unique:products',
            'nombre' => 'required|string|unique:products',
            'descripcion' => 'nullable|string',
            'stock' => 'required|numeric|min:0',
            'imagen_portada' => 'nullable|image:jpeg,png,jpg,gif,svg|max:2048',
            'alt_imagen_portada' => 'nullable'
        ];
    }
}
