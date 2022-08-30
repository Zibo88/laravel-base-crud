@extends('layouts.app')

@section('main_content')
    {{-- i dati del form verranno salvati nello store --}}
    <form action="{{route ('comics.store')}}" method="post">
        {{-- aumentare la sicurezza del form --}}
        @csrf
        {{-- titolo --}}
        <div>
            <label for="title">Titolo</label>
            <input type="text" id="title" name="title">
        </div>
        {{-- descrizione --}}
        <div>
            <label for="description">Descrizione</label>
            <input type="description" id="title" name="description">
        </div>
        {{-- foto --}}
        <div>
            <label for="thumb">Url Immagine</label>
            <input type="thumb" id="title" name="thumb">
        </div>
        {{-- prezzo --}}
        <div>
            <label for="price">Prezzo</label>
            <input type="price" id="title" name="price">
        </div>
        {{-- serie --}}
        <div>
            <label for="series">Serie</label>
            <input type="series" id="series" name="series">
        </div>
        {{-- da di uscita --}}
        <div>
            <label for="sale_date">Data di uscita</label>
            <input type="sale_date" id="sale_date" name="sale_date">
        </div>
        {{-- tipo --}}
        <div>
            <label for="type">Tipologia</label>
            <input type="type" id="type" name="type">
        </div>

        <button>Salva</button>

        
    </form>
@endsection