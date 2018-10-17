<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FrontPageQuads extends Model
{
    protected $fillable = [
        'quad_one', 'quad_two', 'quad_three', 'quad_four'
    ];

    public function iconNameMatcher($icon){
        $display = '';
        if($icon == 'fa-camera'){
            $display = 'Camera';
        } else if ($icon == 'fa-calculator'){
            $display = 'Calculator';
        } else if ($icon == 'fa-align-left'){
            $display = 'IFTA';
        } else {
            $display = 'Bluetooth';
        }
        return $display;
    }
}
