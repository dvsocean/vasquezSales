<?php

namespace App\Http\Controllers;

use App\TinyImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TinyController extends Controller
{
    public function updateSliders(Request $request){
        $tiny = TinyImages::find(1);

        if ($request->hasFile('tinyOne')) {
            $file = $request->file('tinyOne');
            if ($tiny->tiny_one) {
                if (file_exists($tiny->tiny_one)) {
                    unlink($tiny->tiny_one);
                    $tiny->delete($tiny->tiny_one);
                }
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('tiny_images/', $name);
            $tiny->tiny_one = 'tiny_images/' . $name;
        }

        if ($request->hasFile('tinyTwo')) {
            $file = $request->file('tinyTwo');
            if (!empty($tiny->tiny_two)) {
                if (file_exists($tiny->tiny_two)) {
                    unlink($tiny->tiny_two);
                    $tiny->delete($tiny->tiny_two);
                }
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('tiny_images/', $name);
            $tiny->tiny_two = 'tiny_images/' . $name;
        }

        if ($request->hasFile('tinyThree')) {
            $file = $request->file('tinyThree');
            if ($tiny->tiny_three) {
                if (file_exists($tiny->tiny_three)) {
                    unlink($tiny->tiny_three);
                    $tiny->delete($tiny->tiny_three);
                }
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('tiny_images/', $name);
            $tiny->tiny_three = 'tiny_images/' . $name;
        }

        if ($request->hasFile('tinyFour')) {
            $file = $request->file('tinyFour');
            if ($tiny->tiny_four) {
                if (file_exists($tiny->tiny_four)) {
                    unlink($tiny->tiny_four);
                    $tiny->delete($tiny->tiny_four);
                }
            }
            $name = time() . $file->getClientOriginalName();
            $file->move('tiny_images/', $name);
            $tiny->tiny_four = 'tiny_images/' . $name;
        }

        $tiny->save();
        Session::flash('message', 'Slides on the home page have been updated');
        return view('admin_page.index');
    }
}
