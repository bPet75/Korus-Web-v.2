<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }
    public static function authenticate(Request $request){

        if(Auth::attempt(['user' => $request->user, 'password' => $request->password])){
            $request->session()->regenerateToken();
            return redirect("/dash");
        }
        return back()->withErrors((['failed'=>"Invalid data!"]));
    }
}
