<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EmployerFormeRequest extends FormRequest
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
            'domaine_id'        =>['required','integer'],
            'profession_id'     =>['required','integer'],
            'matricule'         =>['required','string','min:3'],
            'nom'               =>['required','string','min:3'],
            'prenom'            =>['required','string','min:3'],
            'email'             =>['required','email'],
            'date'              =>['required','date'],
            'genre'             =>['required','string'],
            'contact'           =>['required','string','min:8','max:15'],
            'situation_M'       =>['required','string','min:3'],
            'adresse'           =>['required','string'],
            'fichier'           =>['required','string'],
            'photo'             =>['required','string'],
        ];
    }
}
