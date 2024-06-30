<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Aquí se puede validar si el usuario tiene el rol correspondiente para crear, si no, se niega ela acción
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
            'title' => 'required|min:5|max:500',
            'slug' => 'required|min:5|max:500|unique:posts',
            'description' => 'required|min:5|max:255',
            'content' => 'required|min:5|max:255',
            'posted' => 'required',
            'category_id' => 'required|integer'
        ];
    }
}
