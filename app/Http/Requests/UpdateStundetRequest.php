<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateStundetRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'sex' => 'required',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required',
            'email' => 'required|email:rfc'
        ];
    }
}
