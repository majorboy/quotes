<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;
use App\Auth;
use App\Http\Requests\CommentRequest;



class CommentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('can:delete,comment')->only(['destroy']);

    }

    public function store(CommentRequest $request, Post $post) {
        $comment = new Comment(['content' => $request->content, 'user_id' => auth()->id()]);
        $post->comments()->save($comment);
        return back();
    }

    public function destroy(Post $post, Comment $comment)
    {
        $comment->delete();
        return back();
    }
}
