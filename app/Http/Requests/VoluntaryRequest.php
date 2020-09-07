<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VoluntaryRequest extends FormRequest
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
            'Id'=>'requered',
            'Nombre'=>'requered',
            'Apellido.1'=>'requered', 
            'Apellido.2'=>'requered',
            'Telefono'=>'requered',
            'Direccion'=>'requered',
            'Email'=>'requered',
            'Descripcion'=>'requered'
        ];
    }
}
