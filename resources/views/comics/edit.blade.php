@extends('layouts.app')

@section('main_content')
    <div>
         

        {{-- snip che mostra gli errori --}}
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        {{-- invio il form a comics.update perchè sarà li che verrà eseguito l'aggiornamento, comics.update ha come method di trasferimento dati PUT. --}}
        <form action="{{route ('comics.update', ['comic' => $comic->id])}}" method="post">
            {{-- aumentare la sicurezza del form --}}
            @csrf
            {{-- modifichiamo il tipo di chiamata  --}}
            @method('PUT')

            {{-- titolo --}}
            <div>
                <label for="title">Titolo</label>
                <input type="text" id="title" name="title" value="{{ old('title') ? old('title') : $comic->title }}">

                {{-- {{dd($comic)}} --}}
            </div>
            {{-- descrizione --}}
            <div>
                <label for="description">Descrizione</label>
                <input type="textarea" id="title" name="description" value="{{ old('description') ? old('description') : $comic->description }}">
            </div>
            {{-- foto --}}
            <div>
                <label for="thumb">Url Immagine</label>
                <input type="text" id="title" name="thumb" value="{{ old('thumb') ? old('thumb') : $comic->thumb }}">
            </div>
            {{-- prezzo --}}
            <div>
                <label for="price">Prezzo</label>
                <input type="text" id="title" name="price" value="{{ old('price') ? old('price') : $comic->price }}">
            </div>
            {{-- serie --}}
            <div>
                <label for="series">Serie</label>
                <input type="text" id="series" name="series"  value="{{ old('series') ? old('series') : $comic->series }}">
            </div>
            {{-- da di uscita --}}
            <div>
                <label for="sale_date">Data di uscita</label>
                <input type="date" id="sale_date" name="sale_date" value="{{ old('sale_date') ? old('sale_date') : $comic->sale_date }}">
            </div>
            {{-- tipo --}}
            <div>
                <label for="type">Tipologia</label>
                <input type="text" id="type" name="type" value="{{ old('type') ? old('type') : $comic->type }}">
            </div>
            
            {{-- aggiunta del tasto che salva le modifiche --}}
            <a href="{{route ('comics.update', ['comic' => $comic->id])}}"><input type="submit" value="Salva"></a>
        </form>

        
    </div>

@endsection