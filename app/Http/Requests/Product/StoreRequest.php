<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'name' => 'required|string|max:100|unique:products',
            'sell_price' => 'required',
            'buy_price' => 'required',
            'category_id' => 'required|integer|exists:App\Category,id',
            'provider_id' => 'required|integer|exists:App\Provider,id',
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Se requiere un nombre para este proveedor',
            'name.unique' => 'El producto ingresado ya esta registrado',
            'name.string' => 'Se requiere ingresar caracteres alfanumericos',
            'name.max' => 'Solo se permite máximo 100 caracteres',

            
          
            'category_id.required' => 'Se requiere una categoria',
            'category_id.integer' => 'Se requiere ingresar caracteres numericos',
            'category_id.exists' => 'La categoria no existe',
            
            'provider_id.required' => 'Se requiere un proveedor',
            'provider_id.integer' => 'Se requiere ingresar caracteres numericos',
            'provider_id.exists' => 'El proveedor no existe',
        ];
    }
}
