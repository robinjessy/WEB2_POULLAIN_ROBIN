@extends('layouts.app')

@section('content')

    <div class="panel-heading"><h1>Article n°{{ $post->id }}</h1></div>
    <div class="panel-body">
        <h2>{{$post->title}}</h2>
        <h3>Auteur: {{$post->user->name}}</h3>
        <p>{{$post->description}}</p>
        <a href="{{route('post.edit', $post->id )}}">Modifier</a>
    </div>


@endsection
