@extends('master')

@section('content')
<!-- Blog Entries Column -->


    <div class="col-sm-12">
        @include('layout.errors')
        <h3><i class="fa fa-pencil fa-lg" aria-hidden="true"></i>Add New Post</h3>
        <hr>
        <form id="postForm" method="post" enctype="multipart/form-data" action="/posts">
            {{ csrf_field() }}
            <div class="form-group">

                <input type="text" class="form-control" id="title" name="title" placeholder="Type Post Title Here">
            </div>


            <div class="form-group" style="margin-top: 20px;">
                        <textarea id="body" name="body" class="form-control" style="height: 300px;" placeholder="Type Post Content Here">
					</textarea>
            </div>
            <div class="form-group">
                <a href="#" class="btn btn-secondary text-uppercase text-center"
                   style=" color: white; float: right;">Cancel</a>
                <input type="submit" class="btn btn-secondary text-uppercase text-center"
                       style="color: white;" value="Publish" name="action">
            </div>

        </form>


    </div>


@endsection