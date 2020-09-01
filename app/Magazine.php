<?php

namespace App;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Magazine extends Model
{
    // use SoftDeletes;
    protected $guarded = ['id'];
}
