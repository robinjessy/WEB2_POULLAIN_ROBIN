@extends('layouts.app')

@section('content')

    <h3>Modifier le projet {{ $projet->name}}</h3>


    @include('projets.form',['action' => 'update'])

@endsection