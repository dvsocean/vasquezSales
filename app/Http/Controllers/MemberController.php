<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class MemberController extends Controller
{
    public function update(Request $request){
        $user= User::findOrFail($request->id);
        //$input= $request->except('name', 'email');
        $input['telephone'] = $request->telephone;

//        if ($request->hasFile('photo_id')) {
//            $file= $request->file('photo_id');
//            if ($user->photo_id) {
//                if (file_exists($user->photo->file)) {
//                    unlink($user->photo->file);
//                    $user->photo->delete($user->photo_id);
//                }
//            }
//            $name= time() . $file->getClientOriginalName();
//            $file->move('nerd_images/', $name);
//            $photo= Photo::create(['file'=>$name]);
//            $input['photo_id']= $photo->id;
//        }

        $user->update($input);

//        Session::flash('message', ''. ucfirst($user->name) .'s profile has been updated');

        return redirect('/profile');
    }
}
