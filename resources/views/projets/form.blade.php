{!! Form::model($projet, ['class' =>'form-horizontal well','url' => action("ProjetController@$action", $projet), 'method' => $action == "store" ? "Post" : "Put"]) !!}

<div class="form-group">
    <label class=" col-md-2 control-label">Nom du projet :</label>

    <div class="col-md-10">
        {!! Form::text('name', null,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">

    <label class=" col-md-2 control-label">email :</label>

    <div class="col-md-10">
        {!! Form::text('email', null,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class=" col-md-2 control-label">tel :</label>

    <div class="col-md-10">
        {!! Form::text('tel', null,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class=" col-md-2 control-label">Adresse :</label>

    <div class="col-md-10">
        {!! Form::text('adresse', null,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class=" col-md-2 control-label">Description :</label>

    <div class="col-md-10">
        {!! Form::textarea('description', null,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class=" col-md-2 control-label">Type de projet :</label>

    <div class="col-md-10">
        {!! Form::text('type', null,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class=" col-md-2 control-label">Contexte de la demande :</label>

    <div class="col-md-10">
        {!! Form::textarea('context', null,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class=" col-md-2 control-label"> Vos objectif :</label>

    <div class="col-md-10">
        {!! Form::textarea('objectif', null,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class=" col-md-2 control-label">Contrainte :</label>

    <div class="col-md-10">
        {!! Form::textarea('contrainte', null,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-default">Sauvegarder</button>
    </div>
</div>


{!! Form::close() !!}