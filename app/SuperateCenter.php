<?php

namespace App;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class SuperateCenter extends Model
{
    // use SoftDeletes;
    protected $guarded = ['id', 'name'];

    public function users(){
        return $this->hasMany(User::class);
    }
}
