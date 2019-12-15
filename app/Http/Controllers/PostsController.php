<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Auth;
use App\Http\Requests\PostRequest;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    public function index()
    {
        $posts = Post::latest()->paginate(10);
        return view('posts.index')->with('posts',$posts);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(PostRequest $request)
    {
        $post = new Post();
        $post->body = $request->body;
        $post->translation = $request->translation;
        $post->source = $request->source;
        $post->user_id = auth()->id();
        $post->save();
        return redirect('/')->with('flash_message', 'Quoteを投稿しました');
    }

    public function show(Post $post)
    {
        return view('posts.show')->with('post',$post);
    }

    public function edit(Post $post)
    {
        return view('posts.edit')->with('post', $post);
    }

    public function update(PostRequest $request, Post $post)
    {
        $post->body = $request->body;
        $post->translation = $request->translation;
        $post->source = $request->source;
        $post->save();
        return redirect('/')->with('flash_message', 'Quoteを更新しました');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect('/')->with('flash_message', 'Quoteを削除しました');;
    }
}
