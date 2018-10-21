<?php

namespace App\Http\Controllers;

use App\FrontPageContent;
use App\Http\Requests\FrontPageContentPost;
use App\Http\Requests\QuadContentPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class FrontPageController extends Controller
{
    public function update(FrontPageContentPost $request){
        if(FrontPageContent::find(1)){
            $fpc = FrontPageContent::find(1);
        } else {
            $fpc = FrontPageContent::create(['heading_one'=>'', 'body_one'=>'', 'heading_two'=>'', 'heading_three'=>'']);
            Session::flash('message', 'Database row has been created, please re-enter and submit data again');
        }

        if($this->isContentModified($request)){
            $fpc->heading_one = $request->heading_one;
            $fpc->body_one = $request->body_one;
            $fpc->heading_two = $request->heading_two;
            $fpc->body_two = $request->body_two;
            $fpc->heading_three = $request->heading_three;
            $fpc->body_three = $request->body_three;
        } else {
            Session::flash('message', 'No content modifications made');
        }
        $fpc->save();
        Session::flash('message', 'You have successfully updated content on the front page');
        return view('admin_page.admin_index.index');
    }

    public function updateQuadContent(QuadContentPost $request){
        $fpc = FrontPageContent::find(1);
        if(!$this->isQuadContentModified($request)){
            Session::flash('message', 'No modifications to quads were made');
            return view('admin_page.admin_index.index');
        } else {
            $fpc->quad_title = $request->quad_title;
            $fpc->quad_heading_one = $request->quad_heading_one;
            $fpc->quad_body_one = $request->quad_body_one;
            $fpc->quad_heading_two = $request->quad_heading_two;
            $fpc->quad_body_two = $request->quad_body_two;
            $fpc->quad_heading_three = $request->quad_heading_three;
            $fpc->quad_body_three = $request->quad_body_three;
            $fpc->quad_heading_four = $request->quad_heading_four;
            $fpc->quad_body_four = $request->quad_body_four;
            $fpc->footer_title = $request->footer_title;
            $fpc->save();
            Session::flash('message', 'You have successfully updated content inside the quad portion of the front page');
            return view('admin_page.admin_index.index');
        }
    }

    public function isQuadContentModified($data){
        $fpc = FrontPageContent::find(1);
        $flag = true;
        if($fpc->quad_title == $data->quad_title && $fpc->quad_heading_one == $data->quad_heading_one
        && $fpc->quad_body_one == $data->quad_body_one && $fpc->quad_heading_two == $data->quad_heading_two
        && $fpc->quad_body_two == $data->quad_body_two && $fpc->quad_heading_three == $data->quad_heading_three
        && $fpc->quad_body_three == $data->quad_body_three && $fpc->quad_heading_four == $data->quad_heading_four
        && $fpc->quad_body_four == $data->quad_body_four && $fpc->footer_title == $data->footer_title){
            $flag = false;
        }
        return $flag;
    }

    public function isContentModified($data){
        $fpc = FrontPageContent::find(1);

        $flag = true;
        if($fpc->heading_one == $data->heading_one && $fpc->body_one == $data->body_one
        && $fpc->heading_two == $data->heading_two && $fpc->body_two == $data->body_two
        && $fpc->heading_three == $data->heading_three && $fpc->body_three == $data->body_three){
            $flag = false;
        }
        return $flag;
    }
}
