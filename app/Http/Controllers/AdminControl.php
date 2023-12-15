<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminControl extends Controller
{
    public function index(Request $request){
        return view('profile.admin.dashboard');
    }
}
