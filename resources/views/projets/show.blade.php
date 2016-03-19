@extends('layouts.app')

@section('content')

    <div class="panel-heading"><h1>Article n°{{ $projet->id }}</h1></div>

    <div class="panel panel-info">
        <div class="panel-heading">
            <h2>{{$projet->name}}</h2>
        </div>

        <div class="panel-body">
            <div class="col-lg-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">E-mail</h3>
                    </div>
                    <div class="panel-body">
                        {{$projet->email}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                        <h3 class="panel-title">Tel</h3>
                    </div>
                    <div class="panel-body">
                        {{$projet->tel}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="panel panel-success">
                    <div class="panel-heading">
                            <h3 class="panel-title">Adresse</h3>
                    </div>
                    <div class="panel-body">
                        {{$projet->adresse}}
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Description</h3>
                    </div>
                    <div class="panel-body">
                        {{$projet->description}}
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Type</h3>
                    </div>
                    <div class="panel-body">
                        {{$projet->type}}
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Context</h3>
                    </div>
                    <div class="panel-body">
                        {{$projet->context}}
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Objectif</h3>
                    </div>
                    <div class="panel-body">
                        {{$projet->objectif}}
                    </div>
                </div>
            </div>

            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Contrainte</h3>
                    </div>
                    <div class="panel-body">
                        {{$projet->contrainte}}
                    </div>
                </div>
            </div>
            <hr>
            @if(Auth::check())
            <div class="col-md-3">
                <a href="{{ action('ProjetController@edit', $projet) }}" class="btn btn-info"> Editer</a>
            </div>

            <div class="col-md-3">
                <form action="{{action('ProjetController@destroy', $projet->id)}}" method="POST" data-confirm="Voulez vous vraiment supprimer cet enregistrement !!">
                    {{csrf_field()}}
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="btn btn-danger" >Supprimer</button>
                </form>
            </div>
            @endif
        </div>
    </div>

@endsection
