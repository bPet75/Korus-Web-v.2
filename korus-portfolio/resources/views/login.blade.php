@extends("master")
@section('content')

@error('failed')
{{$message}}
@enderror
<div id="login_form_holder">
    <form action="{{url('/authenticate')}}" method="POST" id="admin_form" class="login_forms">
        @csrf()
        <label class="admin_pass">Admin jelszó</label>
        <input type="password" id="admin_pass" name="password">
        <input type="hidden" name="user" value="admin">
        <input type="submit" value="Belépés, mint admin">
    </form>
    <form action="{{url('/')}}" method="POST" id="tag_form" class="login_forms">
        @csrf
        <label class="tag_pass">Tag jelszó</label>
        <input type="password" id="tag_pass" name="password">
        <input type="hidden" name="user" value="tag">
        <input type="submit" value="Belépés, mint tag">
    </form>
</div>

@endsection