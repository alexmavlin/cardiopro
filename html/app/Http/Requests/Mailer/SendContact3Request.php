<?php

namespace App\Http\Requests\Mailer;

use Illuminate\Foundation\Http\FormRequest;

class SendContact3Request extends FormRequest
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
            'company3' => 'nullable|string',
            'name3' => 'required|string',
            'phone3' => 'required|numeric',
            'email3' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'company3.string' => 'Field company should be a string',
            'name3.required' => 'Field name is required',
            'name3.string' => 'Field name should be a string',
            'phone3.required' => 'Field phone is required',
            'phone3.numeric' => 'Field phone should consist of numbers',
            'email3.required' => 'Field email is required',
            'email3.email' => 'Field email should be a valid email address',
        ];
    }

    protected function failedValidation($validator)
    {
        return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator->errors())
                ->with("form_id", "single-form");
    }
}
