@extends('Layouts/layout')
@section('css')
    <link rel="stylesheet" href="">
@endsection
@section('Ajouter Perso')

@section('content')
<form class="form" action="{{ url('addDrawer') }}" method="POST">
    @csrf
    <label for="name">Nom </label>
    <input type="text" name="name" id="name" >
    <label for="birth_year">Année de naissance </label>
    <input type="number" name="birth_year" id="birth_year">
    <label for="nationality">Nationalité </label>
    <input type="text" name="nationality" id="nationality">
    <label for="description">Descrption </label>
    <textarea name="description" id="description" row="70" cols="70"></textarea>
    
    <input type="submit" value="Envoyer !">
</form>

@endsection
