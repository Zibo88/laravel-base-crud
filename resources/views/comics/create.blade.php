@extends('layouts.app')

@section('main_content')
    {{-- snip per mostrare gli errori di compilazione durante la compilazione del form per aver una nuova riga --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    {{-- i dati del form verranno salvati nello store --}}
    <form action="{{route ('comics.store')}}" method="post">
        {{-- aumentare la sicurezza del form --}}
        @csrf
        {{-- titolo --}}
        <div>
            <label for="title">Titolo</label>
            {{-- aggiungendo la value {{old ('nome colonna')}} all'input dl form evitiamo che in caso di errore tutti i dati validi scopaiano --}}
            <input type="text" id="title" name="title" value="{{old('title')}}">
            {{-- mostrare errore alla singola input --}}
            @error('title')
                <div class="alert alert-danger">Il titolo è un campo obbligatorio</div>
            @enderror
        </div>
        {{-- descrizione --}}
        <div>
            <label for="description">Descrizione</label>
            <input type="textarea" id="title" name="description" value="{{old('description')}}">
        </div>
        {{-- foto --}}
        <div>
            <label for="thumb">Url Immagine</label>
            <input type="text" id="title" name="thumb" value="{{old('thumb')}}">
        </div>
        {{-- prezzo --}}
        <div>
            <label for="price">Prezzo</label>
            <input type="text" id="title" name="price" value="{{old('price')}}">
        </div>
        {{-- serie --}}
        <div>
            <label for="series">Serie</label>
            <input type="text" id="series" name="series" value="{{old('series')}}">
        </div>
        {{-- da di uscita --}}
        <div>
            <label for="sale_date">Data di uscita</label>
            <input type="date" id="sale_date" name="sale_date" value="{{old('sale_date')}}">
        </div>
        {{-- tipo --}}
        <div>
            <label for="type">Tipologia</label>
            <input type="text" id="type" name="type" value="{{old('type')}}">
        </div>

        <button>Salva</button>

        
    </form>
@endsection