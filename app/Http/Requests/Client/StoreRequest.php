<?php

namespace App\Http\Requests\Client;

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
            'name'=> 'required|string|max:200', 
            'document'=> 'required|string|max:13|unique:clients',
            'address'=> 'string|max:150',
            'phone'=> 'string|max:40',
            'email'=> 'email|string|max:120', 
            
        ];
    }

    public function messages()
    {
        return[
            'name.required' => 'Se requiere un nombre para el cliente',
            'name.string' => 'Se requiere ingresar caracteres alfanumericos',
            'name.max' => 'Solo se permite máximo 200 caracteres',
            'document.string' => 'Se requiere ingresar caracteres alfanumericos',
            'document.max' => 'Solo se permite máximo 150 caracteres',
            'address.string' => 'Se requiere ingresar caracteres alfanumericos',
            'address.max' => 'Solo se permite máximo 150 caracteres',
            'phone.string' => 'Se requiere ingresar caracteres alfanumericos',
            'phone.max' => 'Solo se permite máximo 150 caracteres',
            'email.email' => 'El formato debe ser de tipo email',
            'email.string' => 'Se requiere ingresar caracteres alfanumericos',
            'email.max' => 'Solo se permite máximo 150 caracteres',

        ];
    }
}
