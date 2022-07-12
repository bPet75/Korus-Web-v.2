@extends("master")
@section('content')

        <img src="{{URL::asset('/images/banners/banner.png')}}" alt="banner" width="100%">

        <div class="akt_oldal">
            <div class="bemutatkozas">
                <div class="kor_kep">
                    <img src="{{URL::asset('images/assets/szilvi.jpg', '', array('alt' => 'SCHMIEDMEISZTER SZILVIA'))}}">
                </div>
                <div>
                    <h1>{!!trans('pages.rolunk_nev2')!!}</h1>
                    <p>{!!trans('pages.paragraph_szilvia_mind')!!}</p>
                </div>
            </div>
        </div>

@endsection