<?php

namespace App\Http\Controllers;

use App\FrontpageBicons;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BiconController extends Controller
{
    public function update(Request $request){
        if(FrontpageBicons::find(1)){
            $bicons = FrontpageBicons::find(1);
        } else {
            $bicons = FrontpageBicons::create(['cat_button_one'=>'', 'cat_button_two'=>'', 'cat_button_three'=>'', 'cat_button_four'=>'', 'footer_button'=>'']);
        }

        if($this->isBiconModified($request)){
            if ($request->has('category_button_one')) {
                $bicons->cat_button_one = $request->category_button_one;
            }

            if ($request->has('category_button_two')) {
                $bicons->cat_button_two = $request->category_button_two;
            }

            if ($request->has('category_button_three')) {
                $bicons->cat_button_three = $request->category_button_three;
            }

            if ($request->has('category_button_four')) {
                $bicons->cat_button_four = $request->category_button_four;
            }

            if ($request->has('footer_button')) {
                $bicons->footer_button = $request->footer_button;
            }
            $bicons->save();
            Session::flash('message', 'Category buttons on the home page have been updated');
            return view('admin_page.admin_index.index');
        } else {
            Session::flash('message', 'No modifications have been made');
            return view('admin_page.admin_index.index');
        }
    }

    public function isBiconModified($data){
        $bicons = FrontpageBicons::find(1);
        $flag = true;
        if($bicons->cat_button_one == $data->category_button_one && $bicons->cat_button_two == $data->category_button_two
        && $bicons->cat_button_three == $data->category_button_three && $bicons->cat_button_four == $data->category_button_four){
            $flag = false;
        }
        return $flag;
    }
}
