<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CalculationRequest extends FormRequest
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

    public function messages(){
        return [
            'first_number.required' => 'First Number is required',
            'first_number.integer' => 'First number should be a integer',
            'second.required' => 'Second Number is required',
            'second.integer' => 'Second number should be a integer'
        ];
    }
}
