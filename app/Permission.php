<?php

namespace App;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Permission extends Model
{
    use SoftDeletes;

    public function roles()
    {
        return $this->belongsToMany(Role::class, 'permission_role');
    }
}
