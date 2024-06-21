<?php

namespace App\Http\Requests\Evidencia;

use Illuminate\Foundation\Http\FormRequest;

class UpdateEvidenciaRequest extends FormRequest
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
            'file'=>['bail','file', 'max:10240'],
            'evento_id'=>['bail','required','exists:eventos,id'],
            'tipo'=>['bail','required','min:1', 'max:250'],
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
            'file'=>'',
            'evento_id'=>'',
            'tipo'=>''
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
