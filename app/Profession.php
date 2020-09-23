<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $guarded = [];

    public function employers()
    {
        return $this->hasMany(Employer::class);
    }
}
