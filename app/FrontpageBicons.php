<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrontpageBicons extends Model
{
    protected $fillable = [
        'cat_button_one', 'cat_button_two', 'cat_button_three', 'cat_button_four', 'footer_button'
    ];
}
