<?php

namespace App;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};


class Blog extends Model
{
    use SoftDeletes;

    protected $guarded = ['id'];

    public function user(){
        return $this->belongsTo(User::class, 'created_by');
    }
}
