<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function redirect()
    {
        $usertype = Auth::user()->usertype;
        if($usertype == "Admin"){
            return view("dashboard");
        }else{
            return view("userDashboard");
        }
    }
}
