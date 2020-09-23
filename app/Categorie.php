<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $guarded = [];

    public function categorie_article()
    {
        return $this->hasMany(Article::class);
    }
}
