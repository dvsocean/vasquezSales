<?php

namespace App\Http\Controllers;

use App\Photo;
use App\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function update(Request $request){
        $user= User::findOrFail($request->id);
        $input['telephone'] = $request->telephone;

        if ($request->hasFile('profilePhoto')) {
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
            $input['photo_id']= $photo->id;
        }

        $user->update($input);

//        Session::flash('message', ''. ucfirst($user->name) .'s profile has been updated');

        return redirect('/profile');
    }
}
