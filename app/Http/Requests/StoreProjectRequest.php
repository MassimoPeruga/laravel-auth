<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProjectRequest extends FormRequest
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
            'name' => 'required|unique:projects|max:45',
            'repository' => 'nullable|max:45',
            'repo_url' => 'nullable|url',
            'is_public' => 'nullable|boolean',
            'assignment' => 'nullable',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Il campo Nome è obbligatorio.',
            'name.unique' => 'Il campo Nome deve essere unico.',
            'name.max' => 'Il campo Nome non può superare i :max caratteri.',
            'repository.max' => 'Il campo Repository non può superare i :max caratteri.',
            'repo_url.url' => 'Il campo Link della Repository deve essere un URL valido.',
            'is_public' => 'Il valore del campo Pubblica è errato.',
        ];
    }
}
