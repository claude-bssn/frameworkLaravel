@extends('Layouts/layout')
@section('css')
    <link rel="stylesheet" href="">
@endsection
@section('Modifier Perso')

@section('content') 
<h1>Mise à jour Personage</h1>
<div class="card">
   <form class="form" action="{{ url('modify') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$character->id}}">
        <label for="name">Titre </label>
        <input type="text" name="name" id="name" value="{{$character->name}}">
        <label for="drawer_id">Auteur </label>
        <select name="drawer_id" id="drawer_id" >
                @foreach ($drawers as $drawer)
                    @if ($character->drawer_id == $drawer->id)
                    <option value="{{$drawer->id}}" selected>{{$drawer->name}}</option>
                    @else
                    <option value="{{$drawer->id}}">{{$drawer->name}}</option>
                    @endif
                @endforeach
        </select>
        <label for="description">Descrption </label>
        <textarea name="description" id="description" row="70" cols="70">value="{{$character->description}}"</textarea>
        <label for="creation_year">Année de création </label>
        <input type="number" name="creation_year" id="creation_year" value="{{$character->creation_year}}">
        <label for="comic_book">Album </label>
        <input type="text" name="comic_book" id="comic_book" value="{{$character->comic_book}}">
        <input type="submit" value="Modifier !">
   </form>
</div>

@endsection