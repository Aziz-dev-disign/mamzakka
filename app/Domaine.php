<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domaine extends Model
{
    protected $guarded = [];

    public function domaine()
    {
        return $this->hasMany(Employer::class);
    }
}
