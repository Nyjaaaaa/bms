<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateResidentRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'birthdate' => 'required',
            'birthplace' => 'required',
            'age' => 'required',
            'sex' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'civil_status' => 'required',
            'blood_type' => 'required',
            'occupation' => 'required',
            'religion' => 'required',
            'nationality' => 'required',
        ];
    }
}
