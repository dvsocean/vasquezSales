<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionsController extends Controller
{
    public function showPerms(){
        return view('admin_page.permissions.permissions_page');
    }
}
