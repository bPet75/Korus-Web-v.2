@extends("master")
@section('content')
    @if(isset($notFound))
    <p>Nincsenek galériák!</p>
    @else
    <div class="galeriak">
        @foreach($galleries as $gallery)
        <div class="egy_galeria">
            <div class="kor_kep_galeria">
                <a href="{{url('/galeria/show/'.$gallery->id)}}">
                                @if(isset($gallery->lead))
                                <img src="{{url('/uploadfolder/images/'.$gallery->lead)}}">
                                @else
                                <img src="{{url('/images/assets/ternyak.jpg')}}">
                                @endif
                            </a>
            </div>
            <div class="galeria_neve">
                <h1><a href="{{url('/galeria/show/'.$gallery->id)}}">{{ $gallery->name }}</a></h1>
                <h3>{{$gallery->count}} {{trans('pages.fenykep')}}</h3>
            </div>
        </div>
        @endforeach
    </div>
    @endif
@endsection
