<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Gallery;
use App\Models\Picture;
use App\Models\Video;
use Image;


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
        $pictures = Picture::where('gallery_id', $singleGallery->id)->get();
        $videos = Video::where('gallery_id', $singleGallery->id)->get();

        return view('pages/gallery/edit', compact('singleGallery', 'pictures', 'videos'));
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

    public function storePicture(Request $request)
    {
        if($request->file('file')){

            $file = $request->file('file');
            $destinationPath = public_path().'/uploadfolder/images';
            $filename = str::random(6) . '_' .($file->getClientOriginalName());
            $uploadSuccess   = $file->move($destinationPath, $filename);

            $image = Image::make($destinationPath.'/'.$filename);
            if($image->width() > 900){
                $image->widen(900);
            }
            if($image->height() > 900){
                $image->heighten(900);
            }
            $image->save(null, 90);

            $filename_th = 'th_'.$filename;
            $image_th = Image::make($destinationPath.'/'.$filename);
            if($image_th->width() > $image_th->height()){
                $image_th->crop($image_th->height(),$image_th->height());
            }else{
                $image_th->crop($image_th->width(),$image_th->width());
            }
            $image_th->widen(124);
            $image_th->save($destinationPath.'/th_'.$filename, 90);

            $picture = Picture::create([
                'gallery_id' => $request->input('gallery_id'),
                'name' => $filename,
                'thumbnail' => $filename_th
            ]);


            return redirect('galeria/edit/'.$picture['gallery_id']);
        }
        else{
            return redirect()->back('success', 'Nem volt file kiválasztva!');
        }
    }

    public function deletePicture($id)
    {
        $picture = Picture::find($id);

        $path = public_path('uploadfolder/images/');
        $name = $picture->name;
        $th = $picture->thumbnail;
        unlink($path. $name);
        unlink($path. $th);
        Picture::destroy($picture->id);
        return redirect()->route('listGallery');
    }

    public function storeVideo(Request $request) {

        $request->validate([
            'name' => 'required',
            'source' => 'required'
        ]);

        $src = $request->input('source');

        parse_str( parse_url( $src, PHP_URL_QUERY ), $youtube_id );

        Video::create([
            'gallery_id' => $request->input('gallery_id'),
            'name' => $request->input('name'),
            'source' => $youtube_id['v']
        ]);

        return redirect()->route('listGallery');
    }

    public function deleteVideo($id) {
        $video = Video::find($id);
        Picture::destroy($video->id);
        return redirect()->route('listGallery');
    }

}
