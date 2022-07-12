@extends("master")
@section('content')

<div id="editgallery_upper">
    <div class="newpost_block">
        <form action="{{ url('galeria/update/'.$singleGallery->id) }}" id = "editgallery_form" method="post">
            @csrf
                    <label for="editgallery_name" class="newpost_labels">Galéria neve:</label>
                    <input type="text" name="name" id="newgallery_name" value="{{ $singleGallery->name }}">
                    <input type="submit" value="Módosítás">

                <div class="hir-button">
                    <a href="{{  url('galeria/delete/'.$singleGallery->id) }}">TÖRLÉS</a>
                </div>
        </form>
    </div>

    <div class="newpicture_block">
        <form method="POST" action="{{ route('storePicture') }}" enctype="multipart/form-data">
            @csrf
                    <label for="newpicture_file" class="newpost_labels">Feltöltendő kép:</label>
                    <input type="file" name="file" id="newpicture_file">
                    <input type="hidden" name="gallery_id" id="" value="{{ $singleGallery->id }}">
                    <input type="submit" value="Hozzáadás">
        </form>
    </div>
    <div class="newvideo_block">
        <form action="{{ route('storeVideo') }}" method="post">
            @csrf
                    <label for="newpicture_name" class="newpost_labels">Videó neve:</label>
                    <input type="text" name="name" id="newvideo_name"><br>
                    <label for="newpicture_name" class="newpost_labels">Teljes videó URL:</label>
                    <input type="text" name="source" id="newvideo_name">
                    <input type="hidden" name="gallery_id" id="" value="{{ $singleGallery->id }}">
                    <input type="submit" value="Hozzáadás">
            </form>
    </div>
</div>
<div class="clear"></div>

<div id='update_images'>
    @foreach($pictures as $pic)
    <div class='up_pic_div'>
		<div class="hir-button up_pic_del">
            <a href="{{  url('galeria/picture/delete/'.$pic->id) }}" class="del_pic">TÖRLÉS</a>
		</div>
        <div class='up_pic_holder'>
            <img src="{{url('/uploadfolder/images/'.$pic->name)}}" class="up_pic_img">
        </div>
    </div>
    @endforeach
</div>

<div class="clear"></div>
<div id='update_videos'>
    @foreach($videos as $vid)
    <div class='up_vid_div'>
        <span class="bold">{{ $vid->name }}</span><br>{{ $vid->source }}x
		<div class="hir-button up_pic_del">
            <a href="{{  url('galeria/video/delete/'.$vid->id) }}" class="del_vid">TÖRLÉS</a>
		</div>
    </div>
    @endforeach
</div>


@endsection
