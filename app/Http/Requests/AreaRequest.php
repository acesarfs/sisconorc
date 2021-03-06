<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use App\Models\User;


use Illuminate\Foundation\Http\FormRequest;

class AreaRequest extends FormRequest
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
            'nome' => 'required',
            'user_id' => ['required', Rule::in(User::users,id)],
        ];
    }

    public function messages(){
        return [
            'nome.required' => 'Digite o Nome da Área.',
        ];
    }
}
