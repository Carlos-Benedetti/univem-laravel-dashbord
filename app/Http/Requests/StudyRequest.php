<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudyRequest extends FormRequest
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
            'description'=>'required|string',
            'date_init'=>'required|string',
            'date_finish'=>'required|string',
            'status'=>'required|string',
            'area_id'=>'required|string',
        ];
    }
     /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [
            'description.required' => 'O campo descrição é obrigatorio',
            'description.date_init' => 'O campo Data inicial é obrigatorio',
            'description.date_finish' => 'O campo Data final é obrigatorio',
            'description.status' => 'O campo Status é obrigatorio',
            'description.area_id' => 'O campo Area é obrigatorio',
        ];
    }
}
