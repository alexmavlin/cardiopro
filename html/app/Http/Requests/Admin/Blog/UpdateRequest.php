<?php

namespace App\Http\Requests\Admin\Blog;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'url' => 'required|string',
            'title' => 'required|string|max:1000',
            'meta_description' => 'required|string|max:1500',
            'meta_keywords' => 'required|string|max:1500',
            'date' => 'required|string',
            'author' => 'required|string',
            'breadcrumb' => 'required|string',
            'h1' => 'required|string|max:1500',
            'h2' => 'required|string|max:1500',
            'p_content' => 'required|string|max:5000',
            'img_src' => 'nullable',
            'img_alt' => 'required|string',
            'h3_1' => 'nullable|string|max:1500',
            'h3_2' => 'nullable|string|max:1500',
            'h3_3' => 'nullable|string|max:1500',
            'h3_4' => 'nullable|string|max:1500',
            'h3_5' => 'nullable|string|max:1500',
            'h3_6' => 'nullable|string|max:1500',
            'h3_7' => 'nullable|string|max:1500',
            'h3_8' => 'nullable|string|max:1500',
            'h3_9' => 'nullable|string|max:1500',
            'h3_10' => 'nullable|string|max:1500',
            'p_1' => 'nullable|string|max:5000',
            'p_2' => 'nullable|string|max:5000',
            'p_3' => 'nullable|string|max:5000',
            'p_4' => 'nullable|string|max:5000',
            'p_5' => 'nullable|string|max:5000',
            'p_6' => 'nullable|string|max:5000',
            'p_7' => 'nullable|string|max:5000',
            'p_8' => 'nullable|string|max:5000',
            'p_9' => 'nullable|string|max:5000',
            'p_10' => 'nullable|string|max:5000',
        ];
    }
}
