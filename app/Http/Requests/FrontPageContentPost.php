<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FrontPageContentPost extends FormRequest
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
            'heading_one'=>'required|min:5',
            'body_one'=>'required|min:10',
            'heading_two'=>'required|min:5',
            'body_two'=>'required|min:10',
            'heading_three'=>'required|min:5',
            'body_three'=>'required|min:10',
        ];
    }
}
