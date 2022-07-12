<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FullCalendarController extends Controller
{
    public static function show(){
        return view('calendar');
    }
}
