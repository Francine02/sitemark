<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required|max:50',
            'surname' => 'required|max:100',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O nome é obrigatório!',
            'name.max' => 'O nome deve ter no máximo 50 caracteres!',

            'surname.required' => 'O sobrenome é obrigatório!',
            'surname.max' => 'O sobrenome deve ter no máximo 100 caracteres!',

            'email.required' => 'O email é obrigatório!',
            'email.email' => 'O email é inválido!',
            'email.unique' => 'O email é inválido!',

            'password.required' => 'A senha é obrigatória!',
            'password.min' => 'A senha precisa ter no mínimo 8 caracteres!'
        ];
    }
}
