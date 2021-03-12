@extends('Layouts/layout')
@section('css')
    <link rel="stylesheet" href="">
@endsection
@section('Personnages')

@section('content')
<h1>les Personnages</h1> 
<button ><a href="/addCharacter">Ajouter un Personage</a></button>
<div class="list">
    <table>
        <tr>
            <th>Nom</th>
            <th>Année</th>
            <th>Dessinateur</th>
            <th>Supprimer</th>
        </tr>
        @foreach ($characters as $character)
            <tr>
                <td><a href="/about/{{$character->id}}">{{$character->name}}</a></td>
                <td>{{$character->creation_year}}</td>
                <td><a href="/aboutDrawer/{{$character->drawer->id}}">{{$character->drawer->name}}</a></td>
                <td>
                    <form action="/delete" method="POST">
                        @csrf
                        <input type="hidden" name='id' value="{{$character->id}}">
                        <input type="submit" value="X">
                    </form>
                </td>
            </tr>
            @endforeach
    </table> 
</div>


@endsection
