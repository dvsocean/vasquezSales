<?php

namespace App\Http\Controllers;

use App\Photo;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class MemberController extends Controller
{
    public function update(Request $request){
        $user= User::find($request->id);

        $user->telephone = $request->telephone;
        $user->city = $request->city;

        $avatar = $request->file('profilePhoto');

        if(!empty($avatar)){
            if(is_file($avatar)){
                if ($request->hasFile('profilePhoto')) {
                    if($avatar->getClientOriginalExtension() == 'jpg' || $avatar->getClientOriginalExtension() == 'JPG'
                        || $avatar->getClientOriginalExtension() == 'jpeg' || $avatar->getClientOriginalExtension() == 'JPEG'
                        || $avatar->getClientOriginalExtension() == 'png' || $avatar->getClientOriginalExtension() == 'PNG'){
                        $file= $request->file('profilePhoto');
                        if ($user->photo_id) {
                            if (file_exists('member_images/' . $user->photo->file)) {
                                unlink('member_images/' . $user->photo->file);
                                $user->photo->delete($user->photo_id);
                            }
                        }
                        $name= time() . $file->getClientOriginalName();
                        $file->move('member_images/', $name);
                        $photo= Photo::create(['file'=>$name, 'user_id'=>$request->id]);
                        $user->photo_id = $photo->id;
                        Session::flash('message', 'Your avatar has been updated');
                    } else {
                        Session::flash('error_message', 'Only the JPEG and PNG file format is allowed');
                    }
                }
            } else {
                Session::flash('error_message', 'NOT AN ACCEPTABLE IMAGE FILE! PLEASE CHOOSE AGAIN');
            }
        }

        $user->save();
        return redirect('/profile');
    }
}
