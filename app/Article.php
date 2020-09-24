<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    protected $guarded = [];

    public function categorie()
    {
        return $this->belongsTo(Categorie::class);
    }

    public function type()
    {
        return $this->belongsTo(Type::class);
    }

    public function satut()
    {
        return $this->belongsTo(Statu::class);
    }

    public function partenaire()
    {
        return $this->belongsTo(Partenaire::class);
    }

}
