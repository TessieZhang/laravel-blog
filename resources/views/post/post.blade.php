<!-- Blog Post ( get from database)-->


<div class="card mb-4">
    <div class="card-body">

    {{--{{ $post->id }}--}}
    {{--{{ $post->title }}--}}



    {{--<h2><a href="/posts/{{ $post->id }}" >{{ $post->tilte }}</a></h2>--}}
    {{--<p class="card-text">--}}
    {{--{{ $post->body }}--}}
    {{--</p>--}}
    {{--</div>--}}
    {{--<div >--}}
    {{--{{ $post->created_at->toFormattedDateString() }}--}}
    {{--<a href="#"> {{ $post->user->name }}</a>--}}

        <h2 class="card-title">
    <a href="/posts/{{ $post->id }}" style="color: darkgrey;">{{ $post->title }}</a>
</h2>



        <p class="card-text">{{$post->body}}</p>
        <div class="card-footer text-muted">
            Posted on {{$post->created_at}} by {{ Auth::user()->name }}</a>

    </div>


    <hr>
</div>
    </div>

