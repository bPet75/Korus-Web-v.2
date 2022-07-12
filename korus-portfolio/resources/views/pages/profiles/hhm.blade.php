@extends("master")
@section('content')

        <img src="{{URL::asset('/images/banners/banner.png')}}" alt="banner" width="100%">

        <div class="akt_oldal">
            <div class="bemutatkozas">
                <div class="kor_kep">
                    <img src="{{URL::asset('images/assets/margit.jpg', '', array('alt' => 'Hegyesi Hudik Mária'))}}">
                </div>
                <div>
                    <h1>{!!trans('pages.rolunk_nev4')!!}</h1>
                    <p>{!!trans('pages.paragraph_hhm_mind')!!}</p>
                </div>
            </div>
        </div>

@endsection