<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TinyController extends Controller
{
    public function updateSliders(Request $request){
        $file = $request->file('tinyOne');
        return $file->getClientOriginalExtension();

//
//        if($file->getClientOriginalExtension() == 'JPG'){
//            Session::flash('message', 'OOPS I DID IT AGAIN');
//            return view('admin_page.admin_index.index');
//        }


//        if(TinyImages::find(1)){
//            $tiny = TinyImages::find(1);
//        } else {
//            $tiny = TinyImages::create(['tiny_one'=>'', 'tiny_two'=>'', 'tiny_three'=>'', 'tiny_four'=>'']);
//        }
//
//        $file1 = $request->file('tinyOne');
//        $file2 = $request->file('tinyTwo');
//        $file3 = $request->file('tinyThree');
//
//        if($file1->getClientMimeType() == 'image/jpeg' || $file2->getClientMimeType() == 'image/jpeg' || $file3->getClientMimeType() == 'image/jpeg'){
//            if($file1->getSize() < 2000000 || $file2->getSize() < 2000000 || $file3->getSize() < 2000000){
//
//                if ($request->hasFile('tinyOne')) {
//                    if ($tiny->tiny_one) {
//                        if (file_exists($tiny->tiny_one)) {
//                            //delete from server
//                            unlink($tiny->tiny_one);
//                            //delete from database
//                            $tiny->delete($tiny->tiny_one);
//                        }
//                    }
//                    $name = time() . $file1->getClientOriginalName();
//                    $file1->move('tiny_images/', $name);
//                    $tiny->tiny_one = 'tiny_images/' . $name;
//                    Session::flash('message', 'Sliders on the front page have been updated');
//                }
//
//                if ($request->hasFile('tinyTwo')) {
//                    if ($tiny->tiny_two) {
//                        if (file_exists($tiny->tiny_two)) {
//                            unlink($tiny->tiny_two);
//                            $tiny->delete($tiny->tiny_two);
//                        }
//                    }
//                    $name = time() . $file2->getClientOriginalName();
//                    $file2->move('tiny_images/', $name);
//                    $tiny->tiny_two = 'tiny_images/' . $name;
//                    Session::flash('message', 'Sliders on the front page have been updated');
//                }
//
//                if ($request->hasFile('tinyThree')) {
//                    if ($tiny->tiny_three) {
//                        if (file_exists($tiny->tiny_three)) {
//                            unlink($tiny->tiny_three);
//                            $tiny->delete($tiny->tiny_three);
//                        }
//                    }
//                    $name = time() . $file3->getClientOriginalName();
//                    $file3->move('tiny_images/', $name);
//                    $tiny->tiny_three = 'tiny_images/' . $name;
//                    Session::flash('message', 'Sliders on the front page have been updated');
//                }
//            } else {
//                Session::flash('message', 'File size too big');
//            }
//        } else {
//            Session::flash('message', 'We only accept the JPEG/jpg format');
//        }
//
//        $tiny->save();
//        return view('admin_page.admin_index.index');
    }
}
