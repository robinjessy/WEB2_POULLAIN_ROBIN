<?php $comments->load('user'); ?>

@foreach($comments as $comment)
    <div class="row">
        <div class="col-lg-6">
            <div class="bs-component">
                <blockquote>
                    <p>{{ $comment->content }}</p>
                    <small>{{ $comment->username }}</small>
                </blockquote>
            </div>
        </div>
    </div>
@endforeach