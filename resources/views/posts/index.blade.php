@extends('layouts.default')

@section('title', 'Quotes')

@section('content')
  @if (session('flash_message'))
      <div class="message alert alert-success">
          {{ session('flash_message') }}
      </div>
  @endif
  @foreach($posts as $post)
  <div class="card quote">
    <div class="content">
      <img class="" alt="noimage", src="/storage/no_image.png" width="70" height="70">
      <div class="body">{{ $post->body }}</div>
    </div>
    @isset($post->translation)
      <div class="translation">
        {{ $post->translation }}
      </div>
    @endisset
    <div class="source">
      {{ $post->source }}
    </div>
    <div class="card-footer">
      <div class="user">
        {{ $post->user->name }}
      </div>
      <div class="comment">
        <a href="{{ action('PostsController@show', $post)}}">コメント</a>
        <a href="{{ action('PostsController@edit', $post)}}">編集</a>
        <a href="#" data-id="{{$post->id}}" class="delete">削除</a>
        <form method="post" action="{{ url('/posts', $post->id)}}" id="form_{{ $post->id }}"> 
          {{ csrf_field() }}
          {{ method_field('delete') }}
        </form>
      </div>
    </div>
  </div>
  @endforeach
  {{ $posts->links() }}
  <script src="/js/main.js"></script>
@endsection

