<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class EmployeeRequest extends FormRequest
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
            'name' => 'required|string|max:255',
            "department_id" => 'nullable',
            'email' => 'required',
            'password' => 'required|string|min:6',
            'address' => 'required|string',
            'phone_number' => 'nullable|string',
            'country' => 'required|string|max:255',
        ];
    }
}
