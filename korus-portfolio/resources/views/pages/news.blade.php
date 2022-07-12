@extends('master')
@section('content')


        <img src="{{URL::asset('/images/banners/banner.png')}}" alt="banner" width="100%">





<div class="d-flex flex-column">
    <div class="d-flex flex-column mx-2">
        <div class="d-flex justify-content-left">
            <div class="d-flex mb-3 col-sm-10 col-lg-7 align-self-left">
                <h1>Hírek</h1>
            </div>
        </div>
    </div>
</div>



@foreach($data as $item)

<div class="d-flex flex-column">
    <div class="d-flex flex-column mx-2">
        <div class="d-flex justify-content-left">
            <div class="card d-flex mb-3 col-sm-10 col-lg-7 align-self-center">
                <h5 class="card-title" style="margin: 10px">{{$item->title}}</h5>
                <img src="{{ asset('uploadfolder/images/'.$item->header_img) }}" class="card-img-top" alt="...">
                <div class="card-body">
                    <div class="read_more">
                        {!!$item->read_more!!}
                    </div>
                    <a href="{{'/hirfolyam/'.$item->id}}" class="stretched-link"></a>


                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="d-flex justify-content-left" style="margin-bottom: 20px;">
    <form action="{{url('/hirfolyam/'.$item->id.'/delete/')}}" method="POST">
        @csrf
        <div class="d-flex">
            <div class="d-flex mx-2">
                <input type="text" name="id" value="{{$item->id}}" class="d-none">
                <button class="btn btn-danger align-self-center mb-1">Törlés</button>
            </div>
        </div>
    </form>
</div>
<hr>

@endforeach
{{ $data->links() }}

@endsection