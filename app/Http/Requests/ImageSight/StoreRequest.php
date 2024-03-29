<?php

namespace App\Http\Requests\ImageSight;

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
            'sight_id' => 'required',
            'image' => 'required|image|mimes:jpg,jpeg,png,webp',
            'caption' => 'required|string|max:250',
        ];
    }
}
