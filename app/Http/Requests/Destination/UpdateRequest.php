<?php

namespace App\Http\Requests\Destination;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|string|max:250',
            'slug' => 'required|string|max:250',
            'title' => 'required|string|max:250',
            'subtitle' => 'required|string|max:250',
            'body' => 'required|string',
            'sidebody' => 'required|string',
             'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'caption' => 'required|string|max:250',
            'meta_title' => 'string',
            'meta_description' => 'string'
        ];
    }
}
