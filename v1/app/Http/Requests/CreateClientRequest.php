<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateClientRequest extends FormRequest
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
            'name' => 'required|string|regex:/[a-zA-Z ]/',
            'last_name' => 'required|string|regex:/[a-zA-Z ]/',
            'age' => 'required|numeric',
            'email' => 'required|unique:clients,email|email:rfc',
            'mobile' => 'required|unique:clients,mobile|numeric',
        ];
    }
}
