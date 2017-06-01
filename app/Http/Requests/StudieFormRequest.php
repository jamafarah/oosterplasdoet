<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StudieFormRequest extends FormRequest
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
            'Naam' => 'required',
            'Email' => 'required|email',
            'Geboortedatum' => 'required|date',
            'Adres' => 'required',
            'Studie' => 'required'
        ];
    }
}
