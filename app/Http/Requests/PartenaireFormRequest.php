<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartenaireFormRequest extends FormRequest
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
            'nom'             =>['required','string','min:3'],
            'prenom'          =>['required','string','min:3'],
            'contact'         =>['required','string','min:8'],
            'numero_cnib'     =>['required','string','min:8'],
            'delivre_le'      =>['required','date'],
            'numero'          =>['required','numeric','min:8'],
            'adresse'         =>['required','string'],
            'prestation'      =>['required','string'],
            'fichier_cnib'    =>['required'],
            'fichier_article' =>['required'],
        ];
    }
}
