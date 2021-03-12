@extends('Layouts/layout')
@section('css')
    <link rel="stylesheet" href="">
@endsection
@section('Ajouter Perso')

@section('content')
<form class="form" action="{{ url('addCharacter') }}" method="POST">
    @csrf
    <label for="name">Nom </label>
    <input type="text" name="name" id="name" >
    
    <label for="drawer_id">Auteur</label>
    <select name="drawer_id" id="drawer-id" >
        <option value="">Selectionnez un dessinateur</option>
        @foreach ($drawers as $drawer)
            <option value="{{$drawer->id}}">{{$drawer->name}}</option>
        @endforeach
    </select>
    <label for="description">Descrption </label>
    <textarea name="description" id="description" row="70" cols="70"></textarea>
    <label for="creation_year">Année de création </label>
    <input type="number" name="creation_year" id="creation_year">
    <label for="comic_book">Album </label>
    <input type="text" name="comic_book" id="comic_book">
    <input type="submit" value="Envoyer !">
</form>

@endsection
