<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DonationRequest extends FormRequest
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
            
            //'id'=>'requered',
            'name'=>'required',
            'lastName'=>'required',
            'donationType'=>'required',
            'quantity'=>'required',
            'description'=>'required',
            'currentDate'=>'required',
            'phone'=>'required', 
            //'mail'=>'email'
            
        ];
    }
}

            //coment
            'id'=>'requered',
            'donorName'=>'requered',
            'donationType.1'=>'requered', 
            'incomes_id.2'=>'requered',
        ];
    }
}
