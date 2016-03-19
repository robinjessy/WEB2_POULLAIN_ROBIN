{!! Form::open(['url'=> action('CommentsController@store')]) !!}

<div class="row">
    @if(Auth::guest())
    <div class="col-md-4">
        <div class="form-group">
            {!! Form::text('username', null,['class' => 'form-control','placeholder'=>'Pseudo']) !!}
        </div>
    </div>

    <div class="col-md-6 ">
        <div class="form-group">
            {!! Form::text('email', null,['class' => 'form-control','placeholder'=>'Email']) !!}
        </div>
    </div>
    @else
        {!! Form::hidden('user_id', $post->id) !!}

    @endif

    <div class="col-md-12">
        <div class="form-group">
            {!! Form::textarea('content', null,['class' => 'form-control','placeholder'=>'Message']) !!}
        </div>
    </div>
</div>

{!! Form::hidden('post_id', $post->id) !!}

<div class="form-group">
    <div class="col-lg-12">
        <button type="submit" class="btn btn-default">Envoyer</button>
    </div>
</div>

{!! Form::close() !!}