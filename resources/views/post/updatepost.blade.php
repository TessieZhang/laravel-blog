@extends('master')

@section('content')
    <div class="col-sm-12">
        @include('layout.errors')
        <h3><i class="fa fa-pencil-square-o fa-lg" aria-hidden="true"></i>Edit the Post</h3>
        <hr>
        <form id="postForm" method="post" enctype="multipart/form-data" action="/posts/update/{{ $post->id }}">
            {{ csrf_field() }}
            <div class="form-group">

                <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
            </div>


            <div class="form-group" style="margin-top: 20px;">
                        <textarea id="body" name="body" class="form-control" style="height: 300px;" >{{ $post->body }}
					</textarea>
            </div>
            <div class="form-group">
                <a href="/" class="btn btn-secondary text-uppercase text-center"
                   style=" color: white; float: right;">Cancel</a>
                <input type="submit" class="btn btn-secondary text-uppercase text-center"
                       style="color: white;" value="Publish" name="action">
            </div>

        </form>


    </div>
    @endsection