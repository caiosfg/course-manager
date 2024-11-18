<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCourseRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            'category' => 'required',
            'active' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'vacancies' => 'required',
            'price' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'O campo name é obrigatório',
            'category.required' => 'O campo category é obrigatório',
            'active.required' => 'O campo active é obrigatório',
            'start_date.required' => 'O campo start_date é obrigatório',
            'end_date.required' => 'O campo end_date é obrigatório',
            'vacancies.required' => 'O campo vacancies é obrigatório',
            'price.required' => 'O campo price é obrigatório',
        ];
    }

}
