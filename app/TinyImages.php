<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TinyImages extends Model
{
    protected $fillable = [
        'tiny_one', 'tiny_two', 'tiny_three', 'tiny_four'
    ];
}
