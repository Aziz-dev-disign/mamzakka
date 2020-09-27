<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $guarded = [];

    public function clients()
    {
        return $this->belongsTo(Client::class);
    }

    public function produit_type()
    {
        return $this->belongsTo(Type::class);
    }
}
