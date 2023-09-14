<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdutosFormRequest extends FormRequest
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
            'decricao' => 'required|max:255|min:5',
            'precoUnitario' => 'required|min:1',
            'quantidade' => 'required|min:1',
            'foto1' => 'required',
            'foto2' => 'required',
            'foto3' => 'required',

        ];
    }

    public function messages()
    {
       return[
        'decricao.required' => 'Campo descrição obrigatorio',
        'decricao.max' => 'Campo descrição possui quantidade maxima',
        'decricao.min' => 'campo descrição possui quantidade minima',
        'precoUnitario.required' => 'Campo preço é obrigatorio',
        'precoUnitario.min' => 'Campo preço possui quantidade minima',
        'quantidade.required' => 'Campo quantidade é obrigatorio',
        'quantidade.min' => 'Campo quantidade possui quantidade minima',
        'foto1.required' => 'Foto 1 obrigatoria',
        'foto2.required' => 'Foto 2 obrigatoria',
        'foto3.required' => 'Foto 3 obrigatoria',

       ];
    }
}
