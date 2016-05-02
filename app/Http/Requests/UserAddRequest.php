<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class UserAddRequest extends Request
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
        return array(
            'username'         => 'required|unique:evo_user,username',
            'password'         => 'required|alphaNum|min:3',
            'confirm_password' => 'required|same:password',
            'email'            => 'email|unique:evo_user,email',
            'level'            => 'required|',
        );
    }
}
