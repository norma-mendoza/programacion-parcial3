<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateUsers extends FormRequest
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
            "nombre" => "required",
            "apellido" => "required",
            "fechaNacimiento" => "required",
            "direccion" => "required",
            "dui" => "required",
            "genero" => "required",
            "telefono" => "required",
            "email" => "required",
            "password" => "required",
            "role_id" => "required",
        ];
    }
}
