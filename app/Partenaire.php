<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partenaire extends Model
{
    protected $guarded = [];

    public function partenaire_article()
    {
        return $this->hasMany(Article::class);
    }
}
