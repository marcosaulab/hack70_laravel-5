<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|min:4|max:255',
            'editor' => 'required',
            'genre' => 'required',
            'img' => 'mimes:jpg,bmp,png',
            'abstract' => 'required',
            'release_year' => 'required|numeric',
        ];
    }

    public function messages(): array
    {
        return [
            'title.required' => 'Il campo titolo è richiesto',
            'title.min' => 'Il campo titolo richiede almeno 4 caratteri',
            'editor.required' => 'Il campo editor è richiesto',
        ];
    }

}
