<?php

namespace App\Models;

use Illuminate\Database\Eloquent\{Model, SoftDeletes};

class Magazine extends Model
{
    // use SoftDeletes;
    protected $guarded = ['id'];
}
