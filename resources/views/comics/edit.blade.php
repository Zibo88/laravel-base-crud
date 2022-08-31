@extends('layouts.app')

@section('main_content')
    <div>
        {{-- invio il form a comics.update perchè sarà li che verrà eseguito l'aggiornamento, comics.update ha come method di trasferimento dati PUT. --}}
        <form action="{{route ('comics.update', ['comic' => $comic->id])}}" method="post">
            {{-- aumentare la sicurezza del form --}}
            @csrf
            {{-- modifichiamo il tipo di chiamata  --}}
            @method('PUT')

            {{-- titolo --}}
            <div>
                <label for="title">Titolo</label>
                <input type="text" id="title" name="title" value="{{$comic->title}}">

                {{-- {{dd($comic)}} --}}
            </div>
            {{-- descrizione --}}
            <div>
                <label for="description">Descrizione</label>
                <input type="textarea" id="title" name="description" value="{{$comic->description}}">
            </div>
            {{-- foto --}}
            <div>
                <label for="thumb">Url Immagine</label>
                <input type="text" id="title" name="thumb" value="{{$comic->thumb}}">
            </div>
            {{-- prezzo --}}
            <div>
                <label for="price">Prezzo</label>
                <input type="text" id="title" name="price" value="{{$comic->price}}">
            </div>
            {{-- serie --}}
            <div>
                <label for="series">Serie</label>
                <input type="text" id="series" name="series"value="{{$comic->series}}">
            </div>
            {{-- da di uscita --}}
            <div>
                <label for="sale_date">Data di uscita</label>
                <input type="date" id="sale_date" name="sale_date" value="{{$comic->sale_date}}">
            </div>
            {{-- tipo --}}
            <div>
                <label for="type">Tipologia</label>
                <input type="text" id="type" name="type" value="{{$comic->type}}">
            </div>
    
            <input type="submit" value="Salva">
    
            
        </form>
    </div>    

@endsection