<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ButtonTextPost extends FormRequest
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
            'category_button_one'=>'required',
            'category_button_two'=>'required',
            'category_button_three'=>'required',
            'category_button_four'=>'required',
            'footer_button'=>'required'
        ];
    }
}
