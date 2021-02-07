<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string|max:100|unique:products,name,'.$this->route('product')->id,
            
            'sell_price' => 'required',
            
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Se requiere un nombre para este proveedor',
            'name.unique' => 'SEl producto ingresado ya esta registrado',
            'name.string' => 'Se requiere ingresar caracteres alfanumericos',
            'name.max' => 'Solo se permite máximo 100 caracteres',

           
        ];
    }
}
