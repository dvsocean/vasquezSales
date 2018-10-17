<?php

namespace App\Http\Controllers;

use App\FrontPageQuads;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class QuadController extends Controller
{
    public function updateQuadIcons(Request $request){
        $quads = FrontPageQuads::find(1);
        if(!empty($quads)){
            if($this->areQuadsModified($request)){
                $quads->quad_one = $request->quad_one;
                $quads->quad_two = $request->quad_two;
                $quads->quad_three = $request->quad_three;
                $quads->quad_four = $request->quad_four;
                Session::flash('message', 'You have selected new icons for the front page!');
            } else {
                Session::flash('message', 'Icons have not been modified');
            }
        } else {
            $quads = FrontPageQuads::create(['quad_one'=>'', 'quad_two'=>'', 'quad_three'=>'', 'quad_four'=>'']);
            Session::flash('message', 'Database column for icons has been created, select values again!');
        }
        $quads->save();
        return view('admin_page.admin_index.index');
    }

    public function areQuadsModified($data){
        $quads = FrontPageQuads::find(1);
        $flag = true;
        if($quads->quad_one == $data->quad_one
        && $quads->quad_two == $data->quad_two
        && $quads->quad_three == $data->quad_three
        && $quads->quad_four == $data->quad_four){
            $flag = false;
        }
        return $flag;
    }
}
