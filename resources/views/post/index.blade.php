@extends('master')

@section('content')


    <!-- -->
    @foreach($posts as $post)
        @include('post.post')
    @endforeach


    <!-- Pagination -->
    {{ $posts->links() }}

@endsection