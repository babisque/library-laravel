<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BooksFormRequest extends FormRequest
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
            'titulo' => 'required|min:3',
            'autor' => 'required|min:3',
            'ano' => 'required|min:4',
            'img' => '',
            'sinopse' => ''
        ];
    }

    public function messages()
    {
        return [
            'required' => 'O campo :attribute é obrigatório',
            'min' => 'Número de caracteres inválido'
        ];
    }
}
