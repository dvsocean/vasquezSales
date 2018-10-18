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
            if($request->hasFile('monitor_image_one')){
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
                Session::flash('message', 'Monitor images have been updated');
            }
        } else {
            $monitor = MonitorImages::create(['image_one' => '', 'image_two' => '', 'image_three' => '']);
            Session::flash('message', 'Database has been update for the first time, add data again');
        }
        $monitor->save();
        return view('admin_page.admin_index.index');
    }


}