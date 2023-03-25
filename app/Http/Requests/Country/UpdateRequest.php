<?php

namespace App\Http\Requests\Country;

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
            'destination_id' => 'required',
            'subregion_id' => 'required',
            'description' => 'nullable|string',
            'longitud' => 'nullable|string',
            'latitud' => 'nullable|string',
            'zoom' => 'nullable|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'caption' => 'required|string|max:250',
        ];
    }
}
