@extends('master')

@section('content')


    <h4 style="padding-bottom: 15px;">All posts<a  href="/addpost" class="btn pull-right btn-primary">
                <i class="fa fa-plus fa-lg" aria-hidden="true"></i></a></h4>



        <div class="table-responsive">
            <table id="mytable" class="table table-bordred table-striped">
                <thead>



                <th>Title</th>
                <th>Date</th>
                <th>Edit</th>

                <th>Delete</th>
                </thead>

                <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td><a  href="/posts/{{ $post->id }}">{{ $post->title }}</a></td>
                        <td>{{ $post->created_at }}</td>
                        <td><a class="btn btn-primary" href="/posts/edit/{{ $post->id }}"><i class="fa fa-pencil"></i> </a></td>
                        <td><button type="button" class="btn btn-danger" data-toggle="modal" data-target="#modal-delete"><i class="fa fa-trash"></i> </button></td>
                    {{--<td><a href="/posts/delete/{{ $post->id }}"><i class="fa fa-trash"></i></a></td>--}}
                    </tr>
                @endforeach

                </tbody>
            </table>
            {{ $posts->links() }}
        </div>


    @endsection


<div class="modal fade" id="modal-delete" tabIndex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">

                <h4 class="modal-title">Please Confirm</h4>
                <button type="button" class="close" data-dismiss="modal">
                    ×
                </button>
            </div>
            <div class="modal-body">
                <p class="lead">
                    <i class="fa fa-question-circle fa-lg"></i>
                    Are you sure you want to delete this post?
                </p>
            </div>
            <div class="modal-footer">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <a href="/posts/delete/{{ $post->id }}"><button type="submit" class="btn btn-danger">
                        <i class="fa fa-times-circle"></i> Yes
                    </button></a>
                </form>
            </div>
        </div>
    </div>
</div>