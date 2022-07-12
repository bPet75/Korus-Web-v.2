@extends("master")
@section('content')
    <div class="showgallery">
        <div id='images_list'>
            @foreach($pictures as $pic)
            <div class="egy_galeria">
                <div class="kor_kep_galeria">
                    <a href="{{asset('uploadfolder/images/'.$pic->name)}}" data-featherlight="image"><img src="{{url('/uploadfolder/images/'.$pic->thumbnail)}}" class="fb_pic"></a>
                </div>
            </div>
            @endforeach
            <div class="clear"></div>
        </div>
        <div id='videos_list'>
            @foreach($videos as $vid)
            <div class="egy_galeria">
                <div class="kor_kep_galeria">
                    <div class='video_holder'>
                        <span class='bold'>{{$vid->name}}</span><br>
                        <a href="https://www.youtube.com/embed/{{$vid->source}}" data-featherlight="iframe" data-featherlight-iframe-width="1280" data-featherlight-iframe-height="960" data-featherlight-iframe-frameborder="0" data-featherlight-iframe-allow="autoplay; encrypted-media" data-featherlight-iframe-allowfullscreen="true"><img src="{{url('/images/assets/player.png')}}" class="fb_pic"></a>

                    </div>
                </div>
            </div>
            @endforeach
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
@endsection

