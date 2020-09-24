<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $guarded = [];

    public function client_produit()
    {
        return $this->hasMany(Produit::class);
    }
}
