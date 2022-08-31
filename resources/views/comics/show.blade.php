@extends('layouts.app')

@section('page_title')
    {{$comics->title}}  
@endsection

@section('main_content')
{{-- layout singola card --}}
<div class="card">
    <h1>{{$comics->title}}</h1>
    <img src="{{$comics->thumb}}" alt="{{$comics->title}}">
    <p>Descrizione:{{$comics->description}}</p>
    <div>Prezzo: {{$comics->price}}</div>
    <div>Data di uscita: {{$comics->sale_date}}</div>
    <div>{{$comics->series}} - {{$comics->type}} </div>
</div>

{{-- Bottone per la modifica dell'elemento creato --}}
<div>
     
    {{-- aggiunta di bottone che porta alla sezione edit per la modifica del file inserito nel form --}}
    <button><a href="{{route ('comics.edit',  $comics->id)}}">Modifica</a></button>
</div>
      
   
@endsection