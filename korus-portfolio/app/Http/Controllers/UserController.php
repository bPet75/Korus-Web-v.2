<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function login(){
        return view('login');
    }
    public static function authenticate(Request $request){

        $user = DB::table('users')->where('user', $request->user)->where('password', $request->password)->first();

        if($user != null){
            $request->session()->regenerateToken();
            return redirect("/dash");
        }
        return back()->withErrors((['failed'=>"Invalid data!"]));
    }
}
