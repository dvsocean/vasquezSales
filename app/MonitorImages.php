<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MonitorImages extends Model
{
    protected $fillable = [
        'image_one', 'image_two', 'image_three'
    ];
}
