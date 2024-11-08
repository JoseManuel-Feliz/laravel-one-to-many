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
            'title' => ['required', 'string', 'min:3', 'max:40'],
            'status' => ['required', 'boolean'],
            'author' => ['required', 'string', 'min:3', 'max:30'],
            'contributors' => ['required', 'string', 'min:3', 'max:150'],
            'project_start_date' => ['required', 'date'],
            'description' => ['required', 'string', 'min:3', 'max:2000']
        ];
    }

    /*  TODO | CUSTOM MESSAGES */
}
