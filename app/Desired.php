<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Desired extends Model
{
    protected $fillable = [
        'hardware', 'year', 'engine', 'transmission', 'accessories', 'budget', 'user_id'
    ];
}
