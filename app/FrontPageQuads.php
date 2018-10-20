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
            $display = 'Align left';
        } else if($icon == 'fa-car'){
            $display = 'Car';
        } else if($icon == 'fa fa-battery-quarter'){
            $display = 'Cell battery';
        } else if($icon == 'fa fa-university'){
            $display = 'University';
        } else if ($icon == 'fa fa-binoculars'){
            $display = 'Binoculars';
        } else if($icon == 'fa fa-beer'){
            $display = 'Beer';
        } else if ($icon == 'fa fa-cloud-download'){
            $display = 'Download';
        } else if ($icon == 'fa fa-cutlery'){
            $display = 'Cutlery';
        } else if ($icon == 'fa fa-motorcycle'){
            $display = 'Motorcycle';
        } else if ($icon == 'fa fa-road'){
            $display = 'Road';
        } else if ($icon == 'fa fa-suitcase'){
            $display = 'Suitcase';
        } else if ($icon == 'fa-bluetooth'){
            $display = 'Bluetooth';
        } else {
            $display = 'EMPTY DATABASE';
        }
        return $display;
    }
}
