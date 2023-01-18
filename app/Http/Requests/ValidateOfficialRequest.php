<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateOfficialRequest extends FormRequest
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
            'position' => 'required',
            'last_name' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'address' => 'required',
            'contact' => 'required',
            'term_start' => 'required',
            'term_end' => 'required',
            'status' => 'required',
        ];
    }
}
