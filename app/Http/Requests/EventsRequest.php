<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EventsRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'titre' => 'required|min:3',
            'description' => 'required|min:5'
        ];
    }

    function messages(): array
    {
        return
        [
            'titre.required' => ':Attribute est un champ requis!',
            'titre.min' => 'vous devez entrer un titre au minimum de :min caractere',
            'description.required' => ':Attribute est un champ requis !',
            'description.min' => 'vous devez entrer une description au minimum de :min caractere'
        ];
    }
}
