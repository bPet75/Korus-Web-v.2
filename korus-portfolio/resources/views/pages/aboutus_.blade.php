@extends("master")
@section('content')

		<img src="{{URL::asset('/images/banners/banner.png')}}" alt="banner" width="100%">
<div class="akt_oldal">
	<div class="szoveg_kep_bj">
			Az Egri Érseki Fiúkórus 2011 óta színesíti Eger és környéke zenei életét, ünnepeit, rendezvényeit. Galériánkban betekintést nyerhetnek mindennapjainkba, valamint az elmúlt évek legfontosabb eseményeibe. Koncertnaptárunkban tájékozódhatnak a közelgő eseményekről, koncertekről, fesztiválokról.
		</p>
	</div>
	<div class="szoveg_kep_bj">
		<div class="kor_kep">
                        <a href="{{url('/korus')}}"><img src={{asset('images/assets/korus_oldalra.jpg')}} alt="A kórus"></a>
		</div>
		<div class="szoveg_kb">
			<h1>{!!trans('pages.rolunk_cim1')!!}</h1>
&quot;Ami nekem eszembe jut, hogy itt végre önmagam lehetek és ehhez még egy remek társaság is jár!&quot;<br>
&quot;Itt találtam meg ön magamat és itt érzem jól magam!&quot;<br>
&quot;Egy jó közösség, jó barátokkal, jó érzés itt lenni és a tagjának lenni.&quot;<br>
&quot;Szeretek énekelni! Szeretem a kórust! Jó barátokat szereztem!&quot;<br>
&quot;Nekem a kórus kikapcsolódást nyújt a zene segítségével és segít kiszakadni a mindennapi fáradalmak és stresszforrások közül!&quot;<br>
&quot;Vidámak a próbák, szép helyeken lépünk fel és nagyon jó a közösség.&quot;<br>
&quot;Szuper társaság, jó barátok, rengeteg élménnyel.&quot;<br>
&quot;Sok jó dalt tanulunk.&quot;<br>
&quot;Segít kiszakadni a mindennapok fáradságából, és feltölt energiával.&quot;<br>

			<!--p>{{trans('pages.paragraph1')}}</p-->
		</div>
	</div>
	<div class="szoveg_kep_bj">
		<div class="szoveg_kj">
			<h1>{!!trans('pages.rolunk_nev1')!!}</h1>
Isten minden nyelven beszél, bármelyiken meg lehet szólítani. Azt hiszem, hogy közülük kifejezetten kedves neki a zene, különösen az ének, mert az nemcsak érthető, hanem szivet melengető is. Hiszen az ének nemcsak az ész, a tehetség, hanem a szív hangja is. Egy kórus pedig nemcsak a dallamok mestere, hanem a szívek közössége is. Azt kívánom, hogy a közös éneklés által kerüljetek közelebb Istenhez és találjatok egymásban igaz barátokra.

		</div>
		<div class="kor_kep">
                        <a href="{{url('/ersek')}}"><img src={{asset('images/assets/ternyak.jpg')}} alt="Érsek Úr"></a>
		</div>
	</div>
	<div class="szoveg_kep_bj">
		<div class="kor_kep">
                        <a href="{{url('/szilvia')}}"><img src={{asset('images/assets/szilvi.jpg')}} alt="Schmiedmeiszter Szilvia"></a>
		</div>
		<div class="szoveg_kb">
			<h1>{!!trans('pages.rolunk_nev2')!!}</h1>
A zene varázsa minden pillanatban körbe vesz minket. Nem csak próbán vagy koncerten, hanem egész életünkben. Barátok vagytok és pajtások, munkatársak és igazi felelősséggel bíró apró emberek. A ti munkátok gyümölcse a sok mosoly, ami visszanéz ránk koncertek közben. Ti vagytok a világnak virágai. Köszönöm, hogy velem vagytok, és, hogy veletek lehetek.
		</div>
	</div>
	<div class="szoveg_kep_bj">
		<div class="szoveg_kj">
			<h1>{!!trans('pages.rolunk_nev4')!!}</h1>
Egy dal, egy kórusmű, minden olyan zenei alkotás, amit az ember énekelve ad elő, túllép a szavakon.
A hangjegyek átadásával és leéneklésével megismeritek és megszeretitek egymást. Mintha a lelketek és szívetek így lenne összekötve.
Az éneklés lelkeken keresztüli kommunikáció. Egy csodából
született harmónia. A megszületés pillanatában a dal túllép a szavakon.
Kívánom, hogy amikor énekeltek, mindig éljétek át ezt a csodát!
		</div>
		<div class="kor_kep">
                        <a href="{{url('/hhm')}}"><img src={{asset('images/assets/margit.jpg')}} alt="Hegyesi Hudik Margó"></a>
		</div>
	</div>
	<div class="korustagok">
		<h1>{!!trans('pages.rolunk_cim2')!!}</h1>
		@if(isset($current_members))
		@foreach($current_members as $pic)
		<div class="korustag">
			<div class="korustag_kep">
                    <img src="{{url('/uploadfolder/members/'.$pic->source)}}">
			</div>
			<div class="korustag_neve">
				<h2>{{$pic->name}}</h2>
			</div>
		</div>
		@endforeach
		@endif
	</div>
    @if(isset($old_members)&&count($old_members)>0)
    <div class="korustagok">
        <h1>{!!trans('pages.rolunk_cim5')!!}</h1>

            @foreach($old_members as $pic)
                <div class="korustag">
                    <div class="korustag_kep">
                        <img src="{{url('/uploadfolder/members/'.$pic->source)}}">
                    </div>
                    <div class="korustag_neve">
                        <h2>{{$pic->name}}</h2>
                    </div>
                </div>
            @endforeach
    </div>
    @endif

	<div class="logonk">
		<h1>{{trans('pages.rolunk_cim4')}}</h1>
		{{--<p>{{trans('pages.paragraph6')}} {{link_to('images/assets/logo_terrakotta.png',trans('pages.logonk_png'))}} {{link_to('images/assets/logo_terrakotta.png',trans('pages.logonk_pdf'))}}</p>--}}
		<a href="rolunk/downloadpng">Letöltés</a>
	</div>

	<div class="tamogatok">
		<h1>{!!trans('pages.rolunk_cim3')!!}</h1>
		<a href="{{url('http://ltv.ektf.hu/')}}" target="_blank">
			<img src="{{URL::asset('images/assets/ltv_logo.jpg', '', array('alt' => 'Líceum Televízió'))}}">
		</a>
		<a href="{{url('http://www.tveger.hu/')}}" target="_blank">
			<img src="{{URL::asset('images/assets/egertv.png', '', array('alt' => 'Eger Televízió'))}}">
		</a>
		<a href="{{url('http://www.szentistvantv.hu/')}}" target="_blank">
			<img src="{{URL::asset('images/assets/szent_istvan.jpg', '', array('alt' => 'Szent István Televízó'))}}">
		</a>
		<a href="{{url('http://www.szentistvanradio.hu/')}}" target="_blank">
			<img src="{{URL::asset('images/assets/szent_istvan_radio.jpg', '', array('alt' => 'Szent István rádió'))}}">
		</a>
		<a href="{{url('http://www.ld-foto.hu/')}}" target="_blank">
			<img src="{{URL::asset('images/assets/l_david_alairas.png', '', array('alt' => 'Lingsch Dávid fotó'))}}">
		</a>
	</div>
</div>
@endsection
