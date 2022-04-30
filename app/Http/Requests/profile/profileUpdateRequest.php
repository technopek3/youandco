<?php

namespace App\Http\Requests\profile;

use Illuminate\Foundation\Http\FormRequest;

class profileUpdateRequest extends FormRequest
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
            'first_name'=>['required','min:3'],
            'last_name'=>['required','min:3'],
            'phone'=>['required','min:9'],
            'address'=>['required','min:10'],
            'avatar' => ['image','mimes:jpg,png,jpeg,gif,svg','max:2048'],
        ];
    }
}
