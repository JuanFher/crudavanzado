<?php

namespace App\Http\Requests\Provider;

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
            'email' => 'email|string|max:150|unique:providers',
            'ruc_number' => 'required|string|max:13|min:10|unique:providers',
            'address' => 'string|max:250',
            'phone' => 'required|string|max:20|unique:providers',
        ];
    }
    public function messages()
    {
        return[
            'name.required' => 'Se requiere un nombre para este proveedor',
            'name.string' => 'Se requiere ingresar caracteres alfanumericos',
            'name.max' => 'Solo se permite máximo 100 caracteres',

            'email.required' => 'Se requiere un email para el proveedor',
            'email.string' => 'Se requiere ingresar caracteres alfanumericos',
            'email.email' => 'Se requiere ingresar un correo electronico',
            'email.unique' => 'El correo ingresado ya esta registrado',
            'email.max' => 'Solo se permite máximo 150 caracteres',

            'ruc_number.required' => 'Se requiere un numero de RUC para el proveedor',
            'ruc_number.string' => 'Se requiere ingresar caracteres alfanumericos',
            'ruc_number.min' => 'Se requiere ingresar minimo 10 caracteres',
            'ruc_number.unique' => 'El RUC ingresado ya esta registrado',
            'ruc_number.max' => 'Solo se permite máximo 13 caracteres',

            'phone.required' => 'Se requiere un numero de telefono para el proveedor',
            'phone.string' => 'Se requiere ingresar caracteres alfanumericos',
            'phone.unique' => 'El telefono ingresado ya esta registrado',
            'phone.max' => 'Solo se permite máximo 13 caracteres',

            'address.string' => 'Se requiere ingresar caracteres alfanumericos',
            'address.max' => 'Solo se permite máximo 250  caracteres',
        ];
    }
}
