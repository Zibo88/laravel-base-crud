@extends('layouts.app')

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
            </div>
        @endforeach
    </div>
@endsection