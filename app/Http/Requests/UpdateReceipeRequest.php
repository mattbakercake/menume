<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateReceipeRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; //no auth for initial development
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => ['sometimes','required','max:255',Rule::unique('receipes')->ignore($this->receipe)],
            'prep_mins' => 'sometimes|required|integer',
            'cook_mins' => 'sometimes|integer|required',
            'ease' => 'sometimes|required|integer|min:1|max:5',
            'steps.*.description' => 'sometimes|required',
            'steps.*.ordinal' => 'sometimes|required'
        ];
    }
}
