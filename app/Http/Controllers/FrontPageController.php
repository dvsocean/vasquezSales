<?php

namespace App\Http\Controllers;

use App\FrontPageContent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontPageController extends Controller
{
    public function update(Request $request){
        $fpc = FrontPageContent::find(1);

        if($this->isContentModified($request)){
            Session::flash('message', 'No modifications made');
            return view('admin_page.index');
        } else {
            $fpc->heading_one = $request->heading_one;
            $fpc->body_one = $request->body_one;

            $fpc->heading_two = $request->heading_two;
            $fpc->body_two = $request->body_two;

            $fpc->heading_three = $request->heading_three;
            $fpc->body_three = $request->body_three;

            $fpc->save();

            Session::flash('message', 'You have successfully updated content on the front page');
            return view('admin_page.index');
        }
    }

    public function isContentModified($data){
        $fpc = FrontPageContent::find(1);
        $flag = false;
        if($fpc->heading_one == $data->heading_one && $fpc->body_one == $data->body_one
        && $fpc->heading_two == $data->heading_two && $fpc->body_two == $data->body_two
        && $fpc->heading_three == $data->heading_three && $fpc->body_three == $data->body_three){
            $flag = true;
        }
        return $flag;
    }
}
