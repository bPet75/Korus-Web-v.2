<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Member;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Response;
use Image;


class ChoirController extends Controller
{
    public function index()
    {
        $current_members = Member::all()->where('is_old', 0);
        $old_members = Member::all()->where('is_old', 1);
        return view('pages/aboutus', compact('current_members', 'old_members'));
    }

    public function editCurrent(){
        $members = Member::all()->where('is_old', 0);
        return view('pages/member/current/edit', compact('members'));

    }

    public function deleteCurrent($id)
    {
        $member = Member::find($id);

        $path = public_path('uploadfolder/members/');
        $pic = $member->source;
        unlink($path. $pic);
        Member::destroy($member->id);
        return redirect('tag/current/edit');
    }

    public function storeCurrent(Request $request)
    {
        if($request->file('file')){

            $file = $request->file('file');
            $destinationPath = public_path().'/uploadfolder/members';
            $filename = str::random(6) . '_' .($file->getClientOriginalName());
            $uploadSuccess   = $file->move($destinationPath, $filename);

            $image_th = Image::make($destinationPath.'/'.$filename);
            if($image_th->width() > $image_th->height()){
                $image_th->crop($image_th->height(),$image_th->height());
            }else{
                $image_th->crop($image_th->width(),$image_th->width());
            }
            $image_th->widen(124);
            $image_th->save(null, 90);

            $member = Member::create([
                'source' => $filename,
                'name' => $request->input('name'),
                'is_old' => 0
            ]);
            return redirect('/tag/current/edit');
        }else{
            return redirect()->back('success', 'Nem volt file kiválasztva!');
        }
    }

    public function editOld(){
        $members = Member::all()->where('is_old', 1);
        return view('pages/member/old/edit', compact('members'));

    }

    public function deleteOld($id)
    {
        $member = Member::find($id);

        $path = public_path('uploadfolder/members/');
        $pic = $member->source;
        unlink($path. $pic);
        Member::destroy($member->id);
        return redirect('tag/old/edit');
    }

    public function storeOld(Request $request)
    {
        if($request->file('file')){

            $file = $request->file('file');
            $destinationPath = public_path().'/uploadfolder/members';
            $filename = str::random(6) . '_' .($file->getClientOriginalName());
            $uploadSuccess   = $file->move($destinationPath, $filename);

            $image_th = Image::make($destinationPath.'/'.$filename);
            if($image_th->width() > $image_th->height()){
                $image_th->crop($image_th->height(),$image_th->height());
            }else{
                $image_th->crop($image_th->width(),$image_th->width());
            }
            $image_th->widen(124);
            $image_th->save(null, 90);

            $member = Member::create([
                'source' => $filename,
                'name' => $request->input('name'),
                'is_old' => 1
            ]);
            return redirect('/tag/old/edit');
        }else{
            return redirect()->back('success', 'Nem volt file kiválasztva!');
        }
    }
}
