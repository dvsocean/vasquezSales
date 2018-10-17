<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrontPageQuads extends Model
{
    protected $fillable = [
        'quad_one', 'quad_two', 'quad_three', 'quad_four'
    ];
}
