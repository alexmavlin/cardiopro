<?php

namespace App\Http\Requests\Mailer;

use Illuminate\Foundation\Http\FormRequest;

class SendChoisirRequest extends FormRequest
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
            'pack' => 'required|string',
            'company' => 'nullable|string',
            'name' => 'required|string',
            'phone' => 'required|numeric',
            'email' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'pack.required' => 'Field Pack is required',
            'pack.string' => 'Field Pack should be a string',
            'company.string' => 'Field company should be a string',
            'name.required' => 'Field name is required',
            'name.string' => 'Field name should be a string',
            'phone.required' => 'Field phone is required',
            'phone.numeric' => 'Field phone should consist of numbers',
            'email.required' => 'Field email is required',
            'email.email' => 'Field email should be a valid email address',
        ];
    }

    protected function failedValidation($validator)
    {
        return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator->errors())
                ->with("form_id", "saleChoisirPopUp");
    }
}
