<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class ProjetsRequest extends Request
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
            "name" => "required|min:5",
            "adresse" => "required",
            "description" => "required",
            "email" => "required|email",
            "tel" => "required",
            "context" => "required",
            "type" => "required",
            "objectif" => "required",
            "contrainte" => "required",
        ];
    }
}
