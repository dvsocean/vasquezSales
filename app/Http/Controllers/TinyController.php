<?php

namespace App\Http\Controllers;

use App\TinyImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

/*
 * This controller only has logic to validate JPEG/jpg files only, it will be assumed by the PO if more
 * functionality should be added. At the moment I am developing a MVP to catch fatal errors like octet-streams
 * and similar exceptions.
 */

class TinyController extends Controller
{
    public function updateSliders(Request $request){
        if(TinyImages::find(1)){
            $tiny = TinyImages::find(1);
        } else {
            $tiny = TinyImages::create(['tiny_one'=>'', 'tiny_two'=>'', 'tiny_three'=>'', 'tiny_four'=>'']);
        }

        //request from the frontend
        $file1 = $request->file('tinyOne');
        $file2 = $request->file('tinyTwo');
        $file3 = $request->file('tinyThree');



        if(is_file($file1) || is_file($file2) || is_file($file3)){
            if ($request->hasFile('tinyOne')) {
                if($file1->getClientOriginalExtension() == 'jpg' || $file1->getClientOriginalExtension() == 'JPEG'
                || $file1->getClientOriginalExtension() == 'JPG' || $file1->getClientOriginalExtension() == 'jpeg'
                || $file3->getClientOriginalExtension() == 'png' || $file3->getClientOriginalExtension() == 'PNG'){
                    if ($tiny->tiny_one) {
                        if (file_exists($tiny->tiny_one)) {
                            //delete from server
                            unlink($tiny->tiny_one);
                            //delete from database
                            $tiny->delete($tiny->tiny_one);
                        }
                    }
                    $name = time() . $file1->getClientOriginalName();
                    $file1->move('tiny_images/', $name);
                    $tiny->tiny_one = 'tiny_images/' . $name;
                    Session::flash('message', 'Sliders on the front page have been updated');
                } else {
                    Session::flash('error_message', 'ERROR! We only accept JPEG/jpg at this time. Please select a the correct photo format.');
                }
            }

            if ($request->hasFile('tinyTwo')) {
                if($file2->getClientOriginalExtension() == 'jpg' || $file2->getClientOriginalExtension() == 'JPEG'
                || $file2->getClientOriginalExtension() == 'JPG' || $file2->getClientOriginalExtension() == 'jpeg'
                || $file2->getClientOriginalExtension() == 'png' || $file2->getClientOriginalExtension() == 'PNG'){
                    if ($tiny->tiny_two) {
                        if (file_exists($tiny->tiny_two)) {
                            unlink($tiny->tiny_two);
                            $tiny->delete($tiny->tiny_two);
                        }
                    }
                    $name = time() . $file2->getClientOriginalName();
                    $file2->move('tiny_images/', $name);
                    $tiny->tiny_two = 'tiny_images/' . $name;
                    Session::flash('message', 'Sliders on the front page have been updated');
                } else {
                    Session::flash('error_message', 'ERROR! We only accept JPEG/jpg at this time. Please select a the correct photo format.');
                }
            }

            if ($request->hasFile('tinyThree')) {
                if($file3->getClientOriginalExtension() == 'jpg' || $file3->getClientOriginalExtension() == 'JPEG'
                    || $file3->getClientOriginalExtension() == 'JPG' || $file3->getClientOriginalExtension() == 'jpeg'
                    || $file3->getClientOriginalExtension() == 'png' || $file3->getClientOriginalExtension() == 'PNG'){
                    //database deletion logic
                    if ($tiny->tiny_three) {
                        if (file_exists($tiny->tiny_three)) {
                            unlink($tiny->tiny_three);
                            $tiny->delete($tiny->tiny_three);
                        }
                    }
                    $name = time() . $file3->getClientOriginalName();
                    $file3->move('tiny_images/', $name);
                    $tiny->tiny_three = 'tiny_images/' . $name;
                    Session::flash('message', 'Sliders on the front page have been updated');
                } else {
                    Session::flash('error_message', 'ERROR! We only accept JPEGs and PNGs at this time. Please select a the correct file format.');
                }
            }
        } else {
            Session::flash('error_message', 'NOT AN ACCEPTABLE IMAGE FILE! PLEASE CHOOSE AGAIN');
        }

        $tiny->save();
        return view('admin_page.admin_index.index');
    }
}//End of class

