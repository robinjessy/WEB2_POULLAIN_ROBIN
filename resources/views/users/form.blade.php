{!! Form::model($user, ['class' =>'form-horizontal','url' => action("UserController@$action", $user), 'method' => $action == "store" ? "Post" : "Put"])!!}


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
    <label for="" class="col-md-4 control-label">Nom dedeede</label>
    <div class="col-md-6">
        {!! Form::text('lastname', $user->lastname,['class'=>'form-controle']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-default">Modifier</button>
    </div>
</div>


{!! Form::close() !!}