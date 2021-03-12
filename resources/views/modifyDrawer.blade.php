@extends('Layouts/layout')
@section('css')
    <link rel="stylesheet" href="">
@endsection
@section('Modifier Perso')

@section('content') 
<h1>Mise à jour Dessinateur</h1>
<div class="card">
    <form class="form" action="{{ url('modifyDrawer') }}" method="POST">
        @csrf
        <input type="hidden" name="id" value="{{$drawer->id}}">
        <label for="name">Nom </label>
        <input type="text" name="name" id="name" value="{{$drawer->name}}">
        <label for="birth_year">Année de naissance </label>
        <input type="number" name="birth_year" id="birth_year" value="{{$drawer->birth_year}}">
        <label for="nationality">Nationalité </label>
        <input type="text" name="nationality" id="nationality" value="{{$drawer->nationality}}">
        <label for="description">Descrption </label>
        <textarea name="description" id="description" row="70" cols="70">{{$drawer->description}}</textarea>
        <input type="submit" value="Modifier !">
    </form>
</div>

@endsection