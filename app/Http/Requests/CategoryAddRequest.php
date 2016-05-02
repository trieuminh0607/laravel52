<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class CategoryAddRequest extends Request
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
            'category_name' => 'required|unique:evo_category,name',
        );
    }
}
