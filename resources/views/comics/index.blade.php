@extends('layouts.app')

@section('page_title')
    All Comics
@endsection

@section('main_content')
    <div class="container">
        @foreach ($comics as $comic)
            <div class="card">
                <h1>{{$comic->title}}</h1>
                <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
                <p>Descrizione:{{$comic->description}}</p>
                <div>Prezzo: {{$comic->price}}</div>
                <div>Data di uscita: {{$comic->sale_date}}</div>
                <div>{{$comic->series}} - {{$comic->type}} </div>
                {{-- Creo collegamento con il singolo prodotto --}}
                {{-- la prima parte dell'url è il name che si trova in route:list, quello tra le [] è --}}
                <a href="{{ route ('comics.show', ['comic' => $comic->id])}}">Mostra Dettagli</a>
            </div>

            {{-- Form pr cancellare il dato dalla riga --}}
            <div>
                <form action="{{route('comics.destroy',  $comic->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    {{-- aggiungendo onClick chiediamo all'utente se davvero vuole cancellare l'elemento attraverso un alert --}}
                    <input type="submit" value="Cancella" onClick="return confirm('Sei sicuro di voler cancellare elemento selezionato?');"> 
                </form>
            </div>
        @endforeach
       
    </div>
@endsection