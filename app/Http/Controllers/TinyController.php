<?php

namespace App\Http\Controllers;

use App\TinyImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

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
                if($file1->getClientOriginalExtension() == 'jpg' || $file1->getClientOriginalExtension() == 'JPEG'){
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
                if($file2->getClientOriginalExtension() == 'jpg' || $file2->getClientOriginalExtension() == 'JPEG'){
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
                if($file3->getClientOriginalExtension() == 'jpg' || $file3->getClientOriginalExtension() == 'JPEG'){
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
                    Session::flash('error_message', 'ERROR! We only accept JPEG/jpg at this time. Please select a the correct photo format.');
                }
            }
        } else {
            Session::flash('error_message', 'NOT A FILE! PLEASE CHOOSE AGAIN');
        }

        $tiny->save();
        return view('admin_page.admin_index.index');
    }
}
