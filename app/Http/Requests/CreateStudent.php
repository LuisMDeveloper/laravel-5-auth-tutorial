<?php

namespace SchoolApp\Http\Requests;

use SchoolApp\Http\Requests\Request;

class CreateStudent extends Request
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
            'nombre' => 'required',
            'apellidos' => 'required',
            'genero' => 'required',
            'fecha_nacimiento' => 'required|date',
            //'numero_celular' => 'required'
        ];
    }
}
