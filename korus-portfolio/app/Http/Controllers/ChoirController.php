<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;

class ChoirController extends Controller
{
    public function index()
    {
        $current_members = Member::all()->where('is_old', 0);
        $old_members = Member::all()->where('is_old', 1);
        return view('pages/aboutus', compact('current_members', 'old_members'));
    }
}