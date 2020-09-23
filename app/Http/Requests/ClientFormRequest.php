<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ClientFormRequest extends FormRequest
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
            'nom'                   =>  ['required','string','min:3'],
            'prenom'                =>  ['required','string','min:3'],
            'date_naissance'        =>  ['required','date'],
            'telephone'             =>  ['required','integer','min:8'],
            'numero_cnib'           =>  ['required','string','min:3'],
            'delivre_le'            =>  ['required','date']
        ];
    }
}
