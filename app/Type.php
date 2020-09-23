<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    protected $guarded = [];

    public function type_article()
    {
        return $this->hasMany(Article::class);
    }

    public function produit()
    {
        return $this->hasMany(Type::class);
    }
}
