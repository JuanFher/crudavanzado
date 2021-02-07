<?php

namespace App\Http\Requests\Category;

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
            'name' => 'required|string|max:100',
            'description' => 'string|max:250',
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Se requiere un nombre para la categoria',
            'name.string' => 'Se requiere ingresar caracteres alfanumericos',
            'name.max' => 'Solo se permite máximo 100 caracteres',
            'description.string' => 'Se requiere ingresar caracteres alfanumericos',
            'description.max' => 'Solo se permite máximo 100 caracteres',
        ];
    }
}
