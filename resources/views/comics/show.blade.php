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
     
   
@endsection