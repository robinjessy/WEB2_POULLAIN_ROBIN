@extends('layouts.app')

@section('content')

    <h1>Gérer les projets</h1>

    <p class="text-right">
        <a href="{{ action('ProjetController@create') }}" class="btn btn-info">Ajouter un projet</a>
    </p>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>id</th>
                <th>nom</th>
                <th class="col-md-6">description</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($projets as $projet)
            <tr>
                <td>{{ $projet->id }}</td>
                <td>{{ $projet->name }}</td>
                <td>{{ $projet->description, ['class'=>'col-md-6']}}</td>

                <td>
                    <div class="col-md-3">
                        <a href="{{ action('ProjetController@show', $projet) }}" class="btn btn-info"> Afficher</a>
                    </div>
                    @if(Auth::check())
                    <div class="col-md-3">
                    <a href="{{ action('ProjetController@edit', $projet) }}" class="btn btn-info"> Editer</a>
                    </div>
                    <div class="col-md-3" >
                        <form action="{{action('ProjetController@destroy', $projet->id)}}" method="POST">
                            {{csrf_field()}}
                            <input type="hidden" name="_method" value="DELETE">
                            <button class="btn btn-danger" >Supprimer</button>
                        </form>
                    </div>
                    @endif
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection