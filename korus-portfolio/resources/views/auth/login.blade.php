@extends('master')

@section('content')

@error('failed')
{{$message}}
@enderror
<div id="login_form_holder">
    <form action="{{ route('login') }}" method="POST" id="admin_form" class="login_forms">
        @csrf
        <label for="password" class="admin_pass">Admin jelszó</label>

        <input type="password" id="admin_pass" name="password">
        <input id="user" type="hidden" name="user" value="admin">

        <input type="submit" value="Belépés, mint admin">
    </form>
</div>
@endsection
