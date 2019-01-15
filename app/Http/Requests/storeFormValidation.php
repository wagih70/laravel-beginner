<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeFormValidation extends FormRequest
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
         'name'=>'required|max:20',
         'email'=>'required|max:35',
        ];
    }
    public function messages()
    {
        return [
         'name.required'=>'namecvbnm is required',
                  'name.max'=>'name has more than 20 chars',
         'email.required'=>'emailvbnm is required',
        ];
    }
}
