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
    <table class="kapcsolat_tablazat">
        <tr>
            <td class="kapcsolat_bal_oszlop">
                {{trans('pages.kapcsolat2')}}
            </td>
            <td class="kapcsolat_jobb_oszlop">
                3300 Eger, Széchenyi u. 1.
            </td>
        </tr>
        <tr>
            <td class="kapcsolat_bal_oszlop">
                {{trans('pages.kapcsolat3')}} 
            </td>
            <td class="kapcsolat_jobb_oszlop">
                3300 Eger, Kossuth Lajos utca 8.
            </td>          
        </tr>
        <tr>
            <td class="kapcsolat_bal_oszlop">
                {{trans('pages.kapcsolat4')}} 
            </td>
            <td class="kapcsolat_jobb_oszlop">
                +36 36 517 589
            </td>          
        </tr>
        <tr>
            <td class="kapcsolat_bal_oszlop">
                {{trans('pages.kapcsolat5')}} 
            </td>
            <td class="kapcsolat_jobb_oszlop">
                +36 70 282 4948
            </td>          
        </tr>
        <tr>
            <td class="kapcsolat_bal_oszlop">
                {{trans('pages.kapcsolat6')}} 
            </td>
            <td class="kapcsolat_jobb_oszlop">
                egerfiukorus@gmail.com
            </td>          
        </tr>
        <tr>
            <td class="kapcsolat_bal_oszlop">
                {{trans('pages.kapcsolat6b')}} 
            </td>
            <td class="kapcsolat_jobb_oszlop">
                Felvételi ügyében kérjük keresse telefonon és e-mailben a kórusvezetőt!
            </td>          
        </tr>
    </table>
</div>
<div class="kapcsolat_oszlop">
    <h1>{{trans('pages.kapcsolat7')}}</h1>
    <table class="kapcsolat_tablazat">
        <tr>
            <td class="kapcsolat_bal_oszlop">
                {{trans('pages.kapcsolat8')}}
            </td>
            <td class="kapcsolat_jobb_oszlop">
                <a class="link" href="http://www.eger.egyhazmegye.hu/">http://www.eger.egyhazmegye.hu/</a>
            </td>
        </tr>
        <tr>
            <td class="kapcsolat_bal_oszlop">
                {{trans('pages.kapcsolat9')}} 
            </td>
            <td class="kapcsolat_jobb_oszlop">
                <a class="link" href="http://www.szentistvanradio.hu/">http://www.szentistvanradio.hu/</a>
            </td>          
        </tr>
        <tr>
            <td class="kapcsolat_bal_oszlop">
                {{trans('pages.kapcsolat10')}} 
            </td>
            <td class="kapcsolat_jobb_oszlop">
                <a class="link" href="http://www.szentistvanradio.hu/">http://www.szentistvanradio.hu/</a>
            </td>          
        </tr>
    </table>
    <div class="clear"></div>
</div>

@endsection