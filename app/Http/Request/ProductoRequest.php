<?php

namespace GestorInventarios\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductoRequest extends FormRequest
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
            'descricion' => 'required',
            'cantidad' => 'required|numeric',
            'stock__min' => 'required|numeric'
            'area_id' => 'required|numeric'
        ];
    }
}
