<?php

namespace App\Http\Requests\Tour;

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
            'name' => 'required|string|max:250',
            'title' => 'required|string|max:250',
            'subtitle' => 'required|string|max:250',
            'accommodation' => 'required|string',
            'meals' => 'required|string',
            'city_first' => 'required|string|max:250',
            'city_last' => 'required|string|max:250',
            'slug' => 'required|string|max:250',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp',
            'caption' => 'required|string|max:250',
            'description' => 'required|string',
            'conclusion' => 'required|string',
            'duration' => 'nullable|integer',
            'price' => 'nullable',
            'countries'=> 'required',
            'date' => 'required|date',
            'type_id'=>'required',
            'maplatitud' => 'string',
            'maplongitud' => 'string',
            'mapzoom' => 'integer',





        ];
    }
}
