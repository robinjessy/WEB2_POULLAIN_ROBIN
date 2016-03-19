@extends('layouts.app')

@section('content')

    <div class="panel-heading"><h1>Article n°{{ $post->id }}</h1></div>

    <div class="panel panel-info">
        <div class="panel-heading">
            <h2>{{$post->title}}</h2>
        </div>
        <div class="panel-body">
            <p>{{$post->description}}</p>
            <hr>
            @if(Auth::check())
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
            @endif

        </div>
    </div>
    <h3>Commentaire</h3>
    @include('comments.index', ['comments'=>$post->comments])
    <hr>
    @include('comments.form')

@endsection
