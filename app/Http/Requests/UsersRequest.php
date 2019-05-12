<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UsersRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'body' => 'required|max:255',
            'password'=> 'required|min8',
        ];
    }

    /**
    * Get the error message that apply to the request.
    *
    * @return array
    */
    public function messages()
    {

      return[
        'body.required' => '本文を入れてください',
        'password.required' => 'パスワードの入力をお願いします',
        'password.min' => 'パスワードの長さは8字以上です'
      ];
    }
}
