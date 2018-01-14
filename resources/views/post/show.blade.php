@extends('master')

@section('content')
    <!-- Page Content -->

    <!-- Title -->
    <h1 class="mt-4">{{ $post->title }}</h1>

    <!-- Author -->
    <p class="lead">
        <i class="fa fa-user"></i> by
        <a href="#" style="padding-right: 20px;">{{ $post->user->name }}</a>
        <hr>

    </p>
    <p style="font-size: 14px; margin-bottom: 5px; "><i class="fa fa-calendar"></i> Posted on {{ $post->created_at->toFormattedDateString() }} </p>

    <p style="font-size: 14px;"><i class="fa fa-tags"></i> Tags:
    @if (count($post->tags))
        @foreach($post->tags as $tag)
                <a href="/posts/tags/{{ $tag->name }}" style="color: white;">  <span class="badge badge-pill badge-secondary"> {{ $tag->name }}</span></a>

        @endforeach
    @endif
</p>

    <hr>

    <!-- Post Content -->
    {{ $post->body }}
    <hr>

    <!-- Comments Form -->
    <div class="card my-4">
        <h5 class="card-header">Leave a Comment:</h5>
        <div class="card-body">
            <form action="/posts/{{ $post->id }}/comments" method="post">

                {{ csrf_field() }}
                <div class="form-group">
                    <textarea class="form-control" rows="3" name="body" id="body"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>

    <!-- Single Comment -->
    @foreach($post->comments as $comment)
        <div class="media mb-4">
            <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
            <div class="media-body">
                <strong style="float:right;">{{ $comment->created_at->diffForHumans() }}</strong>
                <h5 class="mt-0">  {{ $comment->user->name }}</h5>

                <article>
                    {{ $comment->body }}
                </article>

            </div>
        </div>
    @endforeach





@endsection