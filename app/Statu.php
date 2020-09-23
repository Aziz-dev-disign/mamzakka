<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statu extends Model
{
    protected $guarded = [];

    public function status_article()
    {
        return $this->hasMany(Article::class);
    }
}
