<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProdottiRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'nome' => 'required|string|max:255',
            'prezzo' => 'required|numeric|min:0',
            'descrizione' => 'required|string|max:1000',
            'img' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'Il nome del prodotto è obbligatorio.',
            'prezzo.required' => 'Il prezzo del prodotto è obbligatorio.',
            'prezzo.numeric' => 'Il prezzo deve essere un numero.',
            'descrizione.required' => 'La descrizione del prodotto è obbligatoria.',
            'img.image' => 'Il file caricato deve essere un\'immagine.',
            'img.mimes' => 'L\'immagine deve essere in uno dei seguenti formati: jpeg, png, jpg, gif.',
            'img.max' => 'L\'immagine non può superare i 2MB.',
        ];
    }
}
