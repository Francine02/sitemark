<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LinkRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|max:100',
            'url' => 'required|url',
            'stream_plataform' => 'required|max:100|min:3',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'O título é obrigatório!',
            'title.max' => 'O título deve ter no máximo 100 caracteres!',

            'url.required' => 'A URL é obrigatória!',
            'url.url' => 'A URL é inválida!',

            'stream_plataform.required' => 'A plataforma de streaming é obrigatória!',
            'stream_plataform.max' => 'A plataforma deve ter no máximo 100 caracteres!',
            'stream_plataform.min' => 'A plataforma deve ter no mínimo 3 caracteres!',

            'image.image' => 'O arquivo deve ser uma imagem!',
            'image.mimes' => 'A imagem deve ser jpeg, png, jpg ou gif!',
            'image.max' => 'A imagem não pode ter mais de 2MB!',
        ];
    }
}
