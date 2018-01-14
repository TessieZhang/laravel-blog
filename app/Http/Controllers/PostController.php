<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Carbon\Carbon;
use App\Repositories\Posts;
use App\Http\Requests\PostUpdateRequest;


class PostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }


    public function index()
    {

        $posts = Post::paginate(5);
//        $posts = Post::latest();
       if (request(['month', 'year'])) {
            $posts->filter(request(['month', 'year']));

        }
//        $posts = $posts->get();


//        if($month = request('month')){
//            $posts->whereMonth('created_at',Carbon::parse($month)->month);
//        }
//
//        if($year = request('year')){
//            $posts->whereYear('created_at',$year);
//        }
//
//        $posts = $posts->get();
//
//        $archive = Post::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
//            ->groupBy('year','month')
//            ->orderByRaw('min(created_at) desc')
//            ->get()
//            ->toArray();


        //$archive = Post::archives();


        return view('post.index', compact('posts'));
        //return view('post.index', compact('posts'));
    }

    // view page
    public function addPost()
    {
        return view('post.addpost');
    }

    //save data
    public function store()
    {
//        $post = new Post;
//
//        //get data
//        $post->title = request('title');
//        $post->body = request('content');
//
//
//        $post->save();
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required'
        ]);

        Post::create([
            'title' => request('title'),
            'body' => request('body'),
            'user_id' => auth()->id()
        ]);

//        auth()->user()->publish(
//          new Post(request(['title','body']))
//        );

        session()->flash('message', 'Your post has now been published.');

        return redirect('/');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function showList(){
        $posts = Post::paginate(5);
        if (request(['month', 'year'])) {
            $posts->filter(request(['month', 'year']));

        }
        return view('post.postlist', compact('posts'));
    }

    public function destroy($id)
    {
       // $post = Post::findOrFail($id);
        $post = Post::find($id);
        $post->tags()->detach();


        $post->delete();


       return redirect('/list');
       // return view('post.addpost');

    }

    public function update(PostUpdateRequest $request,$id){
        $post = Post::find($id);
        $post->fill($request->postFillData());
        $post->save();

        return redirect('/');



    }

    public function editPost(Post $post){

        return view('post.updatepost', compact('post'));
    }
}
