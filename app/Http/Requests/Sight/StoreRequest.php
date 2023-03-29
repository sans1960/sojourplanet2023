<?php

namespace App\Http\Requests\Sight;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
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
            'title' => 'required|string|max:250',
            'slug' => 'required|string|max:250',
            'extract' => 'required|string',
            'introduction' => 'required|string',
            'highlight' => 'required|string',
            'final' => 'required|string',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp',
            'caption' => 'required|string|max:250',
            'longitud' => 'required|string',
            'latitud' => 'required|string',
            'zoom' => 'required|integer',
            'destination_id' => 'required',
            'subregion_id' => 'required',
            'country_id' => 'required',
            'categorysight_id' => 'required',
            'date' => 'required|date',

        ];
    }
}
