<?php

namespace App\Http\Requests\Mailer;

use Illuminate\Foundation\Http\FormRequest;

class SendContact1Request extends FormRequest
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
            'company1' => 'nullable|string',
            'name1' => 'required|string',
            'phone1' => 'required|numeric',
            'email1' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'company1.string' => 'Field company should be a string',
            'name1.required' => 'Field name is required',
            'name1.string' => 'Field name should be a string',
            'phone1.required' => 'Field phone is required',
            'phone1.numeric' => 'Field phone should consist of numbers',
            'email1.required' => 'Field email is required',
            'email1.email' => 'Field email should be a valid email address',
        ];
    }

    protected function failedValidation($validator)
    {
        return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator->errors())
                ->with("form_id", "location-form");
    }
}
