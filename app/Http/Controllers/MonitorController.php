<?php

namespace App\Http\Controllers;

use App\MonitorImages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MonitorController extends Controller
{
    public function updateMonitors(Request $request)
    {
        $monitor = MonitorImages::find(1);
        if (!empty($monitor)) {

            $image1 = $request->file('monitor_image_one');
            $image2 = $request->file('monitor_image_two');
            $image3 = $request->file('monitor_image_three');

            if($request->hasFile('monitor_image_one')){
                if(is_file($image1)){
                    if($image1->getClientOriginalExtension() == 'png' || $image1->getClientOriginalExtension() == 'PNG'){
                        $file = $request->file('monitor_image_one');
                        if ($monitor->image_one) {
                            if (file_exists('monitor_images/' . $monitor->image_one)) {
                                unlink('monitor_images/' . $monitor->image_one);
                                $monitor->delete($monitor->image_one);
                            }
                        }
                        $name = time() . $file->getClientOriginalName();
                        $file->move('monitor_images/', $name);
                        $monitor->image_one = $name;
                    } else {
                        Session::flash('error_message', 'NOT UPLOADED! Only PNG files are suitable for the monitors');
                    }
                } else {
                    Session::flash('error_message', 'NOT AN ACCEPTABLE IMAGE FILE! PLEASE CHOOSE AGAIN');
                }
            }

            if($request->hasFile('monitor_image_two')){
                if(is_file($image2)){
                    if($image2->getClientOriginalExtension() == 'png' || $image2->getClientOriginalExtension() == 'PNG'){
                        $file = $request->file('monitor_image_two');
                        if ($monitor->image_two) {
                            if (file_exists('monitor_images/' . $monitor->image_two)) {
                                unlink('monitor_images/' . $monitor->image_two);
                                $monitor->delete($monitor->image_two);
                            }
                        }
                        $name = time() . $file->getClientOriginalName();
                        $file->move('monitor_images/', $name);
                        $monitor->image_two = $name;
                    } else {
                        Session::flash('error_message', 'NOT UPLOADED! Only PNG files are suitable for the monitors');
                    }
                } else {
                    Session::flash('error_message', 'NOT AN ACCEPTABLE IMAGE FILE! PLEASE CHOOSE AGAIN');
                }
            }

            if($request->hasFile('monitor_image_three')) {
                if (is_file($image3)) {
                    if ($image3->getClientOriginalExtension() == 'png' || $image3->getClientOriginalExtension() == 'PNG') {
                        $file = $request->file('monitor_image_three');
                        if ($monitor->image_three) {
                            if (file_exists('monitor_images/' . $monitor->image_three)) {
                                unlink('monitor_images/' . $monitor->image_three);
                                $monitor->delete($monitor->image_three);
                            }
                        }
                        $name = time() . $file->getClientOriginalName();
                        $file->move('monitor_images/', $name);
                        $monitor->image_three = $name;
                    } else {
                        Session::flash('error_message', 'NOT UPLOADED! Only PNG files are suitable for the monitors');
                    }
                } else {
                    Session::flash('error_message', 'NOT AN ACCEPTABLE IMAGE FILE! PLEASE CHOOSE AGAIN');
                }
            }
        } else {
            $monitor = MonitorImages::create(['image_one' => '', 'image_two' => '', 'image_three' => '']);
            Session::flash('message', 'Database has been update for the first time, add data again');
        }
        $monitor->save();
        return view('admin_page.admin_index.index');
    }


}//End of class