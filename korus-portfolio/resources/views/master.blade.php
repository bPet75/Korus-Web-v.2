<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="/css/style.css" rel="stylesheet">
    <link href="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.css" type="text/css" rel="stylesheet" />
    <script src="//code.jquery.com/jquery-latest.js"></script>
    <script src="//cdn.jsdelivr.net/npm/featherlight@1.7.14/release/featherlight.min.js" type="text/javascript" charset="utf-8"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">


    <script src="editor-sdk.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/10.0.0/classic/ckeditor.js"></script>

    

    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.js"></script>    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css" />



    <title>Egri Érseki Fiúkórus</title>
</head>
<body>

    <div class="oldal">
        <div class="fejlec">
            <div class="logo_box">
                <div id="logo">
                    <a href="{{url('/')}}"><img src="{{URL::asset('/images/assets/logo_terra.png')}}" alt="logo" height="100"></a>
                </div>
            </div>
        @if(Auth::check())
		<div id='user_box'>
			@if(Auth::user()->user == 'admin')
			<a href="{{url('dash')}}">
				<div class="iranyitopult_box">
				</div>
			</a>
			@endif
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
            <div class="logout_box">
				</div>
			</a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
		</div>
		@endif
        <div class="dropdown">
            <button class="dropbtn" style="font-size: 200%; letter-spacing: -8px;">≡≡≡</button>
            <div class="dropdown-content">
                <ul>
                    <li class="dropdown_menupont">
                        <a href="{{url('/rolunk')}}">A KÓRUS</a>
                    </li>
                    <li class="dropdown_menupont">
                        <a href="{{url('/hirfolyam')}}">HÍRFOLYAM</a>
                    </li>
                    <li class="dropdown_menupont">
                        <a href="{{url('/galeria')}}">GALÉRIA</a>
                    </li>
                    <li class="dropdown_menupont">
                        <a href="{{url('/calendar')}}">ESEMÉNYNAPTÁR</a>
                    </li>
                    <li class="dropdown_menupont">
                        <a href="{{url('/kapcsolat')}}">KAPCSOLAT</a>
                    </li>
                </ul>
            </div>
          </div>
            <div class="menu">
                <ul>
                    <li class="menupont">
                        <a href="{{url('/rolunk')}}">A KÓRUS</a>
                    </li>
                    <li class="menupont">
                        <a href="{{url('/hirfolyam')}}">HÍRFOLYAM</a>
                    </li>
                    <li class="menupont">
                        <a href="{{url('/galeria')}}">GALÉRIA</a>
                    </li>
                    <li class="menupont">
                        <a href="{{url('/calendar')}}">ESEMÉNYNAPTÁR</a>
                    </li>
                    <li class="menupont">
                        <a href="{{url('/kapcsolat')}}">KAPCSOLAT</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tartalom">
          @yield('content')
        </div>

        <div class="clear"></div>

        <div class="sziluett" style="text-align: end">
            <img src="{{URL::asset('/images/assets/sziluett_eger.png')}}">
        </div>

        <div class="lablec">
            <div class="sitemap">
                    <a href="{{url('/rolunk')}}">A kórus </a>
                    /
                    <a href="{{url('/hirfolyam')}}">Hírfolyam </a>
                    /
                    <a href="{{url('/galeria')}}">Galéria </a>
                    /
                    <a href="{{url('#')}}">Eseménynaptár </a>
                    /
                    <a href="{{url('/kapcsolat')}}">Kapcsolat</a>
            </div>
            <div class="footer_messages">
                <a href="https://www.facebook.com/egriersekifiukorus"><div class="footer_facebook"></div></a>
                <a href="mailto:egerfiukorus@gmail.com"><div class="footer_email"></div></a>
            </div>
            <div class="created">
                Készítette: <a href="http://www.qnszt.hu"><span>QNSZT</span> Kft</a>
            </div>
        </div>
    </div>
</body>
</html>
