<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EletrodomesticoFormRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nome' => ['required', 'min:3', 'max:100'],
            'descricao' => ['required', 'min:10', 'max:255'],
            'tensao' => ['required'],
            'marca_id' => ['required'],
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O :attribute é necessário',
            'min' => 'O :attribute é muito pequeno, o mínimo é :min',
            'max' => 'O :attribute é muito grande, o máximo é :max'
        ];
    }
}
