<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedewerkerFormRequest extends FormRequest
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
            'naam' => 'required',
            'rol' => 'required',
            'beschrijving' => 'required'
        ];
    }
}
