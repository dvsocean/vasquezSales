<?php

namespace App\Http\Controllers;

use App\FrontPageContent;
use Illuminate\Http\Request;

class FrontPageController extends Controller
{
    public function update(Request $request){
        $front_page_content = FrontPageContent::find(1);
        $front_page_content->id = "1";
        $front_page_content->finance = "TEST CONTENT";
        $front_page_content->repair = "TEST CONTENT";
        $front_page_content->performance = $request->performance;
        $front_page_content->save();
        return "DATA STORED";
    }
}
