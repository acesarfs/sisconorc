<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContaUsuarioRequest extends FormRequest
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
            'id_conta'   => 'required',
            'id_usuario' => 'required',
        ];
    }

    public function messages(){
        return [
            'id_conta.required'   => 'Escolha uma Conta',
            'id_usuario.required' => 'Escolha um Usuário',
        ];
    }
}
