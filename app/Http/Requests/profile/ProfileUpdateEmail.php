<?php

namespace App\Http\Requests\profile;

use Illuminate\Foundation\Http\FormRequest;

class ProfileUpdateEmail extends FormRequest
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
            'email'=>['required','email','unique:users'],
            'email_change_password'=>['required','current_password'],
        ];
    }
}
