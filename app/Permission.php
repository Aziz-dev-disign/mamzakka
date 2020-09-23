<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    protected $guarded = [];
    
    public function permissionsRoles()
    {
        return $this->belongsToMany(Role::class);
    }
}
