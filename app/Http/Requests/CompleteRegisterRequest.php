<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompleteRegisterRequest extends FormRequest
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
            'email' => 'required|email',
            'bio' => 'required|min:10|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'O nome é obrigatório!',
            'name.max' => 'O nome deve ter no máximo 50 caracteres!',

            'email.required' => 'O email é obrigatório!',
            'email.email' => 'O email é inválido!',

            'bio.required' => 'A bio é obrigatória!',
            'bio.min' => 'A bio precisa ter no mínimo 10 caracteres!',
            'bio.max' => 'A bio precisa ter no máximo 255 caracteres!',

            'image.image' => 'O arquivo deve ser uma imagem!',
            'image.mimes' => 'A imagem deve ser jpeg, png, jpg ou gif!',
            'image.max' => 'A imagem não pode ter mais de 2MB!',
        ];
    }
}
