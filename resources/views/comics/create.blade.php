@extends('layouts.app')

@section('main_content')
    <form action="{{route ('comics.store')}}" method="post">
        {{-- titolo --}}
        <div>
            <label for="title"></label>
            <input type="text" id="title" name="title">
        </div>
        {{-- descrizione --}}
        <div>
            <label for="description"></label>
            <input type="description" id="title" name="description">
        </div>
        {{-- foto --}}
        <div>
            <label for="thumb"></label>
            <input type="thumb" id="title" name="thumb">
        </div>
        {{-- prezzo --}}
        <div>
            <label for="price"></label>
            <input type="price" id="title" name="price">
        </div>
        {{-- serie --}}
        <div>
            <label for="series"></label>
            <input type="series" id="series" name="series">
        </div>
        {{-- da di uscita --}}
        <div>
            <label for="sale_date"></label>
            <input type="sale_date" id="sale_date" name="sale_date">
        </div>
        {{-- tipo --}}
        <div>
            <label for="type"></label>
            <input type="type" id="type" name="type">
        </div>

        <button>Salva</button>

        
    </form>
@endsection