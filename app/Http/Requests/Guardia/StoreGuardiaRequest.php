<?php

namespace App\Http\Requests\Guardia;

use Illuminate\Foundation\Http\FormRequest;

class StoreGuardiaRequest extends FormRequest
{
    /**
     * Indicates if the validator should stop on the first rule failure.
     *
     * @var bool
     */
    protected $stopOnFirstFailure = true;

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
            'estado'=>['bail','required','max:1'],
            'fecha_ini'=>['bail','required','date'],
            'fecha_fin'=>['bail','required','date'],
            'persona_id'=>['bail','required','exists:personas,id'],

        ];
    }

    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'estado'=>'',
            'fecha_ini'=>'',
            'fecha_fin'=>'',
            'persona_id'=>'',

        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */
    public function messages()
    {
        return [];
    }
}
