<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateBankRequest extends FormRequest
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
            'name'=>'required',
            'registered_name'=>'required',
            'slug'=>'required',
            'bic'=>'required',
            'website'=>'required',
            'short_description'=>'required',
            'description'=>'required',
            'img_1' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'img_2' => 'mimes:jpeg,png,jpg,gif,svg|max:2048',
        ];
    }
}
