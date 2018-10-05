<?php

namespace App\Http\Controllers;

use App\FrontPageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontPageController extends Controller
{
    public function update(Request $request){
        $front_page_content = FrontPageContent::find(1);
        $front_page_content->performance = $request->performance;
        $front_page_content->finance = $request->finance;
        $front_page_content->repair = $request->repair;
        $front_page_content->save();

        Session::flash('message', 'You have successfully updated content on the front page');
        return view('admin_page.index');
    }
}
