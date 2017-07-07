<?php

namespace GestorInventarios\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsuarioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true; // se define como autorizado para su implementacion
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {   
        // se definen las reglas para el request entrante a la aplicacion
        return [
            
            'nombre' => 'required',
            'apellido' => 'required',
            'cargo' => 'required',
            'telefono' => 'required|numeric',
            'area_id' => 'required|numeric',
                   
        ];
    }
}
