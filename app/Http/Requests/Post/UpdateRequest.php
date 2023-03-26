<?php

namespace App\Http\Requests\Post;

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
            'blog_id' => 'required',
            'order' => 'required|integer',
            'body' => 'nullable|string',
            'longitud' => 'required|string',
            'latitud' => 'required|string',
            'zoom' => 'required|integer',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp',
            'caption' => 'required|string|max:250',
        ];
    }
}
