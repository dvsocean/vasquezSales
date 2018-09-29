<?php

namespace App\Http\Controllers;

use App\Desired;
use App\User;
use Illuminate\Http\Request;

class DesiredController extends Controller
{
    public function update(Request $request){
        //$user= User::findOrFail($request->id);

//        $input['user_id'] = $request->id;
//        $input['hardware'] = $request->hardware;
//        $input['year'] = $request->year;
//        $input['engine'] = $request->engine;
//        $input['transmission'] = $request->transmission;
//        $input['accessories'] = $request->accessories;
//        $input['budget'] = $request->budget;

        Desired::create(['user_id'=>$request->id, 'hardware'=> $request->hardware, 'year'=>$request->year,
            'engine'=>$request->engine, 'transmission'=>$request->transmission, 'accessories'=> $request->accessories,
            'budget'=>$request->budget]);

        return redirect('profile');
    }
}
