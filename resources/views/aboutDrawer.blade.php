@extends('Layouts/layout')
@section('css')
    <link rel="stylesheet" href="">
@endsection
@section('Détail Perso')

@section('content') 
    
    <h1>Détail Dessinateur</h1>
    <div class="card">
        <h2>{{$drawer->name}}</h2>
        <h3>Nationalité</h3>
        <p>{{$drawer->nationality}}</p>
        <h3>Année de naissance</h3>
        <p>{{$drawer->birth_year}}</p>
        <h3>Personnage</h3>
        @foreach ($characters as $character)
        <p>{{$character->name}}</p>
        @endforeach
        <h3>Description</h3>
        <p>{{$drawer->description}}</p>
        <a class='button' href="/modifyDrawer/{{$drawer->id}}">Modifier</a>
    </div>
    
    @endsection