@extends('layouts.app')

@section('content')

    <p class="text-right">
        <a href="{{ action('PostController@create') }}" class="btn btn-info">Ajouter un articles</a>
    </p>

    <div class="panel panel-default">
        <div class="panel-heading"><h1 style="text-align: center">Mes Articles</h1></div>

        <div class="panel-body">
            @foreach($posts as $post)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>{{$post->title}}</h2>
                    </div>
                    <div class="panel-body">
                        <p>{{$post->description}}</p>

                        <div class="col-md-3">
                            <a href="{{ action('PostController@show', $post) }}" class="btn btn-info"> Afficher</a>
                        </div>

                        <div class="col-md-3">
                            <a href="{{ action('PostController@edit', $post) }}" class="btn btn-info"> Editer</a>
                        </div>

                        <div class="col-md-3">
                            <form action="{{action('PostController@destroy', $post->id)}}" method="POST" data-confirm="Voulez vous vraiment supprimer cet enregistrement !!">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                                <button class="btn btn-danger" >Supprimer</button>
                            </form>
                        </div>

                    </div>
                </div>
            @endforeach
            <br>
        </div>
    </div>

@endsection