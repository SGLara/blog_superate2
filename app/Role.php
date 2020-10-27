<?php

namespace App;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Role extends Model
{
    use SoftDeletes;

    protected $fillable = ['name', 'slug'];

    public function permissions()
    {
        return $this->belongsToMany(Permission::class, 'permission_role');
    }
}
