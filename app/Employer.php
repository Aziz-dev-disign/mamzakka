<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    protected $guarded = [];

    public function getIsDomaineAttribute()
    {
        return $this->employer_domaine()->where('id')->exists();
    }

    public function getIsProfessionAttribute()
    {
        return $this->employer_profession()->where('id')->exists();
    }

    public function employer_domaine()
    {
        return $this->belongsTo(Domaine::class);
    }

    public function employer_profession()
    {
        return $this->belongsTo(Profession::class);
    }
}
