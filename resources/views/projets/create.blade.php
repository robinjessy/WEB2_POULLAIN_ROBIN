@extends('layouts.app')

@section('content')

    <h3>Ajouter un projet</h3>


    @include('projets.form',['action' => 'store'])

@endsection