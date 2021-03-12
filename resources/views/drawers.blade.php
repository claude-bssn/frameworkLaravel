@extends('Layouts/layout')
@section('css')
    <link rel="stylesheet" href="">
@endsection
@section('Personnages')

@section('content')
<h1>les Personnages</h1> 
<button ><a href="/addDrawer">Ajouter un Dessinateur</a></button>
@if (session('status'))
    <h1>{{session('status')}}</h1>
    
@endif
<div class="list">
    <table>
        <tr>
            <th>Nom</th>
            <th>Année de naissance</th>
            <th>Nationalité</th>
            <th>Supprimer</th>
        </tr>
        @foreach ($drawers as $drawer)
            <tr>
                <td><a href="/aboutDrawer/{{$drawer->id}}">{{$drawer->name}}</a></td>
                <td>{{$drawer->birth_year}}</td>
                <td>{{$drawer->nationality}}</td>
                <td>
                    <form action="/deleteDrawer" method="POST">
                        @csrf
                        <input type="hidden" name='id' value="{{$drawer->id}}">
                        <input type="submit" value="X">
                    </form>
                </td>
            </tr>
            @endforeach
    </table> 
</div>


@endsection
