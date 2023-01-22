<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePosts extends FormRequest
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
            'titulo' => 'required',
            'extracto' => 'required',
            'contenido' => 'required'
        ];
    }

    public function attributes()
    {
        return [
            'title' => 'titulo del post'
        ];
    }

    public function messages()
    {
        return [
            'extracto.requiere' => 'Debe ingresar un extracto del post'
        ];
    }
}
