@extends('layouts.app')

@section('content')

    <h3>Ajouter un projet</h3>


    @include('post.form',['action' => 'store'])

@endsection