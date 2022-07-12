@extends("master")
@section('content')



        {{--A bannert változtathatóvá kell tenni! A contact-ban van kommentelve a régi kódja--}}
        <img src="{{URL::asset('/images/banners/banner.png')}}" alt="banner" width="100%">

        <div class="akt_oldal">
            <div class="bemutatkozas">
                <div class="kor_kep">
                    <img src={{asset('images/assets/korus_oldalra.jpg')}} alt="A kórus">
                </div>
                <div>
                    <h1>{{trans('pages.rolunk_cim1')}}</h1>
                    <p>{{trans('pages.paragraph_1_mind')}}</p>
                </div>
            </div>
        </div>




    
@endsection
