<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class switchcaseRequest extends FormRequest
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
            'first_number' => 'required|integer',
            'second_number' => 'required|integer',
            'calc_method' => ''
        ];
    }

    public function error_msg(){
        return [
            'first_number.required' => 'Please fill the first number',
            'first_number.integer' => 'First number should be integer',
            'second_number.required' => 'Plese fill the second number',
            'second_number.integer' => 'second number should be integer'
        ];
    }
}
