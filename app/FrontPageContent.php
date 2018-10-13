<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrontPageContent extends Model
{
    protected $fillable = [
        'performance', 'finance', 'repair'
    ];
}
