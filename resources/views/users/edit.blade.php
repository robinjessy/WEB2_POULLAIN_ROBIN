@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">Mon Compte</div>
                    <div class="panel-body">

                        {!! Form::model($user,['class'=>'form-horizontal', 'files' => true ]) !!}

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Avatar</label>
                            <div class="col-md-6">
                                <div>
                                    @if($user->avatar)
                                        <img src="{{ url($user->avatar) }}" class="img-rounded"/>
                                    @endif
                                </div>
                                <br>
                               <div>
                                   {!! Form::file('avatar',['class'=>'form-controle']) !!}
                               </div>
                               <hr>
                            </div>
                        </div>


                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Pseudo</label>
                            <div class="col-md-6">
                                {!! Form::text('name', null,['class'=>'form-controle']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">E-mail</label>
                            <div class="col-md-6">
                                {!! Form::email('email', null,['class'=>'form-controle', 'disabled']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Prénoms</label>
                            <div class="col-md-6">
                                {!! Form::text('firstname', $user->firstname,['class'=>'form-controle']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="" class="col-md-4 control-label">Nom</label>
                            <div class="col-md-6">
                                {!! Form::text('lastname', $user->lastname,['class'=>'form-controle']) !!}
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-lg-12 col-lg-offset-8">
                                    <button type="submit" class="btn btn-success">Modifier</button>
                            </div>
                        </div>


                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection