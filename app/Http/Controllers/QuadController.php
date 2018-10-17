<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuadController extends Controller
{
    public function updateQuadIcons(Request $request){
        return $request->all();
    }
}
