@extends('layouts.app')

@section('page_title')
    All Comics
@endsection

@section('main_content')
    <div class="container">
        <div class="row row-cols-4 g-4">
            @foreach ($comics as $comic)
                <div class="col">
                    <div class="card">
                        <img src="{{$comic->thumb}}" class="card-img-top" alt="{{$comic->title}}">
                        <div class="card-body">
                            <h5 class="card-title">{{$comic->title}}</h5>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{$comic->price}}</li>
                            <li class="list-group-item">{{$comic->sale_date}}</li>
                            <li class="list-group-item">{{$comic->type}}</li>
                        </ul>
                        <div class="card-body">
                            {{-- reindirizzo l'utente alla pagina del singolo prodotto rispetto all'id --}}
                            <a href="{{ route ('comics.show', ['comic' => $comic->id])}}" class="card-link">Mostra Dettagli</a>
                            <a href="#" class="card-link"> 
                                <div>
                                    {{-- Form pr cancellare il dato dalla riga --}}
                                    <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        {{-- aggiungendo onClick chiediamo all'utente se davvero vuole cancellare l'elemento attraverso un alert --}}
                                        <input type="submit" value="Cancella" onClick="return confirm('Sei sicuro di voler cancellare elemento selezionato?');"> 
                                    </form>
                                </div>
                            </a>
                        </div>
                    </div> 
                </div>
        @endforeach
        </div>
        
       
    </div>
@endsection