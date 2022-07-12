<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Picture;
use App\Models\Video;


class GalleryController extends Controller
{
    public function listGallery()
    {
        if(Gallery::all()->count() > 0) {
            $galleries = Gallery::all();
            foreach($galleries as $g){
                $g->count = Picture::where('gallery_id', $g->id)->count();
                if($g->count > 0)
                    $g->lead = Picture::where('gallery_id', $g->id)->first()->thumbnail;

            }
            return view('pages/gallery/galeria', compact('galleries'));
        }
        else {
            $notFound = true;
            return view('pages/gallery/galeria', compact('notFound'));
        }
    }

    public function showGallery($id) {

        $pictures = Picture::all()->where('gallery_id', $id);
        $videos = Video::all()->where('gallery_id', $id);

        return view('pages/gallery/show', compact('pictures', 'videos'));

    }

    public function editGallery($id) {
        $singleGallery = Gallery::find($id);

        return $singleGallery;
    }

    public function createGallery() {
        return view('pages/gallery/create');
    }

    public function storeGallery(Request $request) {

        $request->validate([
            'newgallery_name' => 'required'
        ]);

        Gallery::create([
            'name' => $request->input('newgallery_name')
        ]);

        return redirect()->route('listGallery');
    }

    public function deleteGallery($id) {
        $gallery = Gallery::find($id);

        $pictures = Picture::where('gallery_id', $gallery->id)->get();
        $path = public_path('uploadfolder/images/');

        foreach($pictures as $p) {
            $name = $p->name;
            $th = $p->thumbnail;
            unlink($path. $name);
            unlink($path. $th);
            Picture::destroy($p->id);

        }
        Gallery::destroy($id);
        return redirect()->route('listGallery');
    }
}
