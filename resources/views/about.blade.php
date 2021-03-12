@extends('Layouts/layout')
@section('css')
    <link rel="stylesheet" href="">
@endsection
@section('Détail Perso')

@section('content') 

    <h1>Détail Personnage</h1>
    <div class="card">
        <h2>{{$character->name}}</h2>
        <h3>Créateur</h3>
        <p>{{$character->drawer->name}}</p>
        <h3>Année de création</h3>
        <p>{{$character->creation_year}}</p>
        <h3>Album</h3>
        <p>{{$character->comic_book}}</p>
        <h3>Description</h3>
        <p>{{$character->description}}</p>
       
        <a href="/modify/{{$character->id}}">Modifier</a>
    </div>
    
    @endsection