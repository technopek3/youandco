<?php

namespace App\Http\Requests\api\holiday;

use Illuminate\Foundation\Http\FormRequest;

class holidayUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => ['required','string'],
            'date' => ['required','date'],
            'price' => ['required','numeric'],
        ];
    }
}