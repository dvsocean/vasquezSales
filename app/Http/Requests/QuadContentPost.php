<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class QuadContentPost extends FormRequest
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
            'quad_title'=>'min:3',
            'quad_heading_one'=>'min:3',
            'quad_body_one'=>'min:10',
            'quad_heading_two'=>'min:3',
            'quad_body_two'=>'min:10',
            'quad_heading_three'=>'min:3',
            'quad_body_three'=>'min:10',
            'quad_heading_four'=>'min:3',
            'quad_body_four'=>'min:10',
            'footer_title'=>'min:3'
        ];
    }
}
