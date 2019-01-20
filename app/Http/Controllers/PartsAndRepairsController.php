<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PartsAndRepairsController extends Controller
{
    public function index(){
        return view('partsAndRepairs.partsNrepairs');
    }
}
