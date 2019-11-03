<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployeesRequest extends FormRequest
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
            'name' => 'required',
            'gender' => 'required',
            'phone' => 'required',
            'id_code' => 'required'
        ];
    }

    public function messages()
    {
        return $messages = [
            'name.required' => 'không được để trống',
            'gender.required' => 'không được để trống',
            'phone.required' => 'không được để trống',
            'id_code.required' => 'không được để trống'
        ];
    }
}
