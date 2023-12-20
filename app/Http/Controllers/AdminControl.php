<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminControl extends Controller
{
    public function index(Request $request){
        return view('profile.admin.dashboard', [
            'pandingUser' => count(User::where('status', 0)->get()),
        ]);
    }
}
