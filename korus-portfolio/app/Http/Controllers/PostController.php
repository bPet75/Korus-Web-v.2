<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Storage;
use Illuminate\Pagination\Paginator;

class PostController extends Controller
{
    public static function show(){


        $news = Post::orderBy('id', 'desc')->paginate(4);

        return view('pages/news', ['data' => $news]);
    }

    public static function showOnePost($id){

        $new = Post::find($id);

        return view('pages/onenew', ['data' => $new]);
    }

    public static function create(Request $request){

        
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'img' => 'required',
        ]);
        $newImgName = time().'-'.$request->title.'.'.$request->img->extension();
        $request->img->move(public_path('uploadfolder/images'), $newImgName);
        $lang = 1;
        if($request->lang = "en"){
            $lang = 2;
        }

        $new = Post::create([
            'title' => $request->input('title'),
            'lang_id' => $lang,
            'read_more' => $request->input('read_more'),
            'content' => $request->input('content'),
            'header_img' => $newImgName
        ]);
        
        return redirect()->route('hirfolyam');
    }

    public function destroy(Request $request)
    {
        
        $new = Post::find($request->id);
        $path = public_path('uploadfolder/images/');
        $name = $new->header_img;
        //dd('img/news_img/'.$new->header_img);
        unlink($path. $name);
        $new->delete();
        Post::destroy($request->input('id'));
        

        
        return redirect()->route('hirfolyam');
    }
    public function update(Request $request, $id)
    {
        $new = Post::find($id);
        $new->title = $request->input('title');
        $new->content = $request->input('content');
        $new->header_img = $new->header_img;

        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);
        if($request->exists('img')){
            
            $request->img->move(public_path('uploadfolder/images/'), $new->header_img);
            
        }

        $new->save();

        return redirect()->route('hirfolyam');

    }
}
