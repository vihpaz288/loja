<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginFormRequest extends FormRequest
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
            'email' => 'required|min:13|max:255',
            'senha' => 'required|min:4|max:10',
        ];
    }

    public function messages()
    {
        return[
            'email.required' => 'Campo email é obrigatorio',
            'email.min' => 'campo email possui quantidade minima de 13 caracteres',
            'email.max' => 'campo email possui quantidade maxima de 255 caracteres',
            'senha.required' => 'Campo senha é obrigatorio',
            'senha.min' => 'Campo senha possui quantidade minima de 4 caracteres',
            'senha.max' => 'campo senha possui quantidade maxima de 10 caracteres',
        ];
    }


}
