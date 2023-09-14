<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
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
            'name' => 'required|min:4|max:255',
            'email' => 'required|unique:users,email|min:13|max:255',
            'password' => 'required|min:4|max:10',
            'permissaoID' =>'required'
        ];

    }

    public function messages()
    {
        return[
            'nome.required' => 'Campo nome é obrigatorio',
            'nome.min' => 'Campo nome possui quantidade minima de 4 letras',
            'nome.max' => 'campo nome possui quantidade maxima de 255 letras',
            'email.required' => 'Campo email é obrigatorio',
            'email.unique' => 'Email já cadastrado',
            'email.min' => 'campo email possui quantidade minima de 13 caracteres',
            'email.max' => 'campo email possui quantidade maxima de 255 caracteres',
            'password.required' => 'Campo senha é obrigatorio',
            'password.min' => 'Campo senha possui quantidade minima de 4 caracteres',
            'password.max' => 'campo senha possui quantidade maxima de 10 caracteres',
        ];
    }

    
}
