<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function produit()
    {
        return $this->hasMany(Achat::class);
    }
}
