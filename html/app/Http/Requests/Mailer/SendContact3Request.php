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
            'company' => 'nullable|string',
            'name' => 'required|string',
            'phone' => 'required|numeric',
            'email' => 'required|email',
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
