<?php

namespace App;

use Illuminate\Database\Eloquent\{Model,SoftDeletes};


class Blog extends Model
{
    use SoftDeletes;
    protected $guarded = ['id','title','created_by_id'];
}
