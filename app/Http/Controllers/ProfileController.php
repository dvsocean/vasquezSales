<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function showPage(){
        return view('admin_page.profile_content.profile_content');
    }



}
