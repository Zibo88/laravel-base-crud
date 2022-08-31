@extends('layouts.app')

@section('page_title')
    {{$comic->title}}  
@endsection

@section('main_content')
{{-- layout singola card --}}
<div class="card">
    <h1>{{$comic->title}}</h1>
    <img src="{{$comic->thumb}}" alt="{{$comic->title}}">
    <p>Descrizione:{{$comic->description}}</p>
    <div>Prezzo: {{$comic->price}}</div>
    <div>Data di uscita: {{$comic->sale_date}}</div>
    <div>{{$comic->series}} - {{$comic->type}} </div>
</div>
     
   
@endsection