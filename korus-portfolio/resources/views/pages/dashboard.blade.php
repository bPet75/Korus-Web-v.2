@extends("master")
@section('content')

<div id='dash_form_holder'>

	<div id='dash_menu'>
		<div>
            <a href="{{url('/post/new')}}">Hír hozzáadása</a>
		</div>
		<div>
            <a href="{{url('/galeria/create')}}">Galéria hozzáadása</a>
		</div>
		<div>
            <a href="{{url('/rolunk')}}">Bannerek kezelése</a>
		</div>
        <div>
            <a href="{{url('/tag/current/edit')}}">Tagok kezelése</a>
		</div>
        <div>
            <a href="{{url('/tag/old/edit')}}">Volt tagok kezelése</a>
        </div>
        <div>
            <a href="https://accounts.google.com/ServiceLogin?service=analytics&passive=true&nui=1&hl=hu&continue=https%3A%2F%2Fwww.google.com%2Fanalytics%2Fweb%2F%3Fhl%3Dhu&followup=https%3A%2F%2Fwww.google.com%2Fanalytics%2Fweb%2F%3Fhl%3Dhu" target="_blank">Megtekintési adatok</a>
        </div>
        <div>
            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
	</div>

    <form action="{{url('/')}}" method="POST" id="tag_newpass_form">
        @csrf
        <div>
                <label class="tag_newpass">Új tag jelszó</label>
            </div>
            <div class="pass_labels">
                <input type="password" id="tag_newpass" class="password2">
            </div>
            <div class="pass_labels">
                <label>Jelszó újra</label>
            </div>
                <input type="password" id="tag_newpass2" class="password2">
                <input type="submit" value="Változtatás">
    </form>
</div>

@endsection
