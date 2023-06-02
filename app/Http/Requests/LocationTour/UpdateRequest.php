<?php

namespace App\Http\Requests\LocationTour;

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
            'site' => 'required|string|max:250',
            'slug' => 'required|string|max:250',
            'longitud' => 'required|string',
            'latitud' => 'required|string',
            'zoom' => 'required|integer',
            'tour_id' => 'required',
        ];
    }
}
