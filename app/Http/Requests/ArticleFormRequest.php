<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArticleFormRequest extends FormRequest
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
            'categorie_id'        =>['required','integer'],
            'type_id'             =>['required','integer'],
            'statu_id'            =>['required','integer'],
            'partenaire_id'       =>['required','integer'],
            'numero_article'      =>['required','string'],
            'nom'                 =>['required','string'],
            'slug'                =>['required','string'],
            'description'         =>['required','string','min:15','max:255'],
            'localisation'        =>['required','string'],
            'superficie'          =>['required','string'],
            'image'               =>['required','image'],
            'date'                =>['required','date'],
        ];
    }
}
