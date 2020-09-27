<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProduitFormRequest extends FormRequest
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
            'client_id'           =>['required','integer'],
            'type_id'             =>['required','integer'],
            'prix'                =>['required','string','min:6'],
            'numero_article'      =>['required','integer'],
            'superficie'          =>['required','string'],
            'date'                =>['required','date'],
            'numero_recu'         =>['required','integer'],
        ];
    }
}
