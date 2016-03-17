@extends('layouts.app')

@section('content')

    <h3>Modifier l'article {{ $post->title }}</h3>


    @include('post.form',['action' => 'update'])

@endsection