@extends("master")
@section('content')

<form action="{{ route('storeGallery') }}" method="post">
    @csrf
        <div class="newgallery_block">
            <label for="newgallery_name" class="newgallery_labels">Galéria neve:</label>
            <input type="text" name="newgallery_name" id="newgallery_name">
            <input type="submit" value="Létrehozás">
        </div>
    </form>

@endsection
