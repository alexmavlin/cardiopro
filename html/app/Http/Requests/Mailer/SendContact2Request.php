<?php

namespace App\Http\Requests\Mailer;

use Illuminate\Foundation\Http\FormRequest;

class SendContact2Request extends FormRequest
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
            'company2' => 'nullable|string',
            'name2' => 'required|string',
            'phone2' => 'required|numeric',
            'email2' => 'required|email',
        ];
    }

    public function messages()
    {
        return [
            'company2.string' => 'Field company should be a string',
            'name2.required' => 'Field name is required',
            'name2.string' => 'Field name should be a string',
            'phone2.required' => 'Field phone is required',
            'phone2.numeric' => 'Field phone should consist of numbers',
            'email2.required' => 'Field email is required',
            'email2.email' => 'Field email should be a valid email address',
        ];
    }

    protected function failedValidation($validator)
    {
        return redirect()
                ->back()
                ->withInput()
                ->withErrors($validator->errors())
                ->with("form_id", "achat-form");
    }
}
