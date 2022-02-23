<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookRequest extends FormRequest
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
            'title' => 'required',
            'id_user' => 'required',
            'pages' => 'required|numeric',
            'price' => 'required|numeric',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => '"Title" is required',
            'id_user.required' => '"Author" is required',
            'pages.required' => '"Pages" is required',
            'price.required' => '"Price" is required',
            'pages.numeric' => '"Pages" must be a number',
            'price.numeric' => '"Price" must be a number'
        ];
    }
}
