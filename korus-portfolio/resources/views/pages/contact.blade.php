@extends("master")
@section('content')


        <img src="{{URL::asset('/images/banners/banner.png')}}" alt="banner" width="100%">
{{--<div id="slider" class="banner nivoSlider">
    @foreach($banners as $pic)
    {{URL::asset('uploadfolder/banners/'.$pic->name, '', array('alt' => 'banner'))}}
    @endforeach
</div>--}}
<div class="kapcsolat_oszlop">
    <h1>{{trans('pages.kapcsolat1')}}</h1>
    <div class="kapcsolat_div">
        <div class="kapcsolat_bal_aldiv">
            {{trans('pages.kapcsolat2')}}
        </div>
        <div class="kapcsolat_bal_aldiv">
            {{trans('pages.kapcsolat3')}} 
        </div>
        <div class="kapcsolat_bal_aldiv">
            {{trans('pages.kapcsolat4')}}
        </div>
        <div class="kapcsolat_bal_aldiv">
            {{trans('pages.kapcsolat5')}} 
        </div>
        <div class="kapcsolat_bal_aldiv">                       
            {{trans('pages.kapcsolat6')}} 
        </div>
        <div class="kapcsolat_bal_aldiv">                       
            {{trans('pages.kapcsolat6b')}} 
        </div>
    </div>
    <div class="kapcsolat_div">
        <div class="kapcsolat_jobb_aldiv">
            3300 Eger, Széchenyi u. 1.
        </div>
        <div class="kapcsolat_jobb_aldiv">
            3300 Eger, Kossuth Lajos utca 8.
        </div>
        <div class="kapcsolat_jobb_aldiv">
            +36 36 517 589
        </div>
        <div class="kapcsolat_jobb_aldiv">
            +36 70 282 4948 
        </div>
        <div class="kapcsolat_jobb_aldiv">                       
            egerfiukorus@gmail.com
        </div>
        <div class="kapcsolat_jobb_aldiv">                       
            Felvételi ügyében kérjük keresse telefonon és e-mailben a kórusvezetőt!
        </div>
    </div>
</div>
<div class="kapcsolat_oszlop">
    <h1>{{trans('pages.kapcsolat7')}}</h1>
    <div class="kapcsolat_div">
        <div class="kapcsolat_bal_aldiv">
            {{trans('pages.kapcsolat8')}}
        </div>
        <div class="kapcsolat_bal_aldiv">
            {{trans('pages.kapcsolat9')}}
        </div>
        <div class="kapcsolat_bal_aldiv">
            {{trans('pages.kapcsolat10')}}
        </div>
    </div>
    <div class="kapcsolat_div">
        <div class="kapcsolat_jobb_aldiv">
            <a class="link" href="http://www.eger.egyhazmegye.hu/">http://www.eger.egyhazmegye.hu/</a>
        </div>
        <div class="kapcsolat_jobb_aldiv">
            <a class="link" href="http://www.szentistvanradio.hu/">http://www.szentistvanradio.hu/</a>
        </div>
        <div class="kapcsolat_jobb_aldiv">
            <a class="link" href="http://www.szentistvanradio.hu/">http://www.szentistvanradio.hu/</a>
        </div>
    </div>
    <div class="clear"></div>
</div>

@endsection