<?php

namespace App\Http\Controllers;

use App\Post;

use App\Comment;


class CommentsController extends Controller
{
    //
    public function store(Post $post){

        $post->addComments(request('body'),auth()->id());

//        Comment::create([
//            'body' => request('body'),
//        'post_id' => $post->id,
//            'user_id' => auth()->id()
//        ]);
        return back();
    }
}
