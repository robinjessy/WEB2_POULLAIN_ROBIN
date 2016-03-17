{!! Form::model($post, ['class' =>'form-horizontal well','url' => action("PostController@$action", $post), 'method' => $action == "store" ? "Post" : "Put"]) !!}

<div class="form-group">
    <label class=" col-md-2 control-label">Titre de l'article :</label>

    <div class="col-md-10">
        {!! Form::text('title', null,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <label class=" col-md-2 control-label">Article :</label>

    <div class="col-md-10">
        {!! Form::textarea('description', null,['class' => 'form-control']) !!}
    </div>
</div>

<div class="form-group">
    <div class="col-lg-10 col-lg-offset-2">
        <button type="submit" class="btn btn-default">Sauvegarder</button>
    </div>
</div>


{!! Form::close() !!}