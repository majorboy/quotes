@extends('layouts.default')

@section('title', 'Quotes')

@section('content')
  <h3 class="mypage_user_name">Stocks by {{ $user->name }}</h3>
  @if (session('flash_message'))
      <div class="alert alert-success">
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
        <a href="{{ url('/users', $post->user->id) }}">{{ $post->user->name }}</a> 
      </div>
      <div class="comment">
        <a href="{{ action('PostsController@show', $post)}}">コメント</a>
        <span class="count">{{ $post->comments()->count()}}</span>
      </div>
      @if(Auth::user()->is_stock($post->id))
        <a href="#" data-id="{{$post->id}}" class="unstock">ストック解除</a>
        <form method="post" action="{{ route('stocks.unstock', $post->id) }}" id="unstock_{{ $post->id }}"> 
          {{ csrf_field() }}
          {{ method_field('delete') }}
        </form>
      @else
        <a href="#" data-id="{{$post->id}}" class="stock">ストックする</a>
        <form method="post" action="{{ route('stocks.stock', $post->id) }}" id="stock_{{ $post->id }}">
          {{ csrf_field() }}
        </form>
      @endif
      @can('update',$post)
        <a href="{{ action('PostsController@edit', $post)}}">編集</a>
      @endcan
      @can('delete',$post)
        <a href="#" data-id="{{$post->id}}" class="delete">削除</a>
      @endcan
      <form method="post" action="{{ url('/posts', $post->id)}}" id="form_{{ $post->id }}"> 
        {{ csrf_field() }}
        {{ method_field('delete') }}
      </form>
    </div>
  </div>
  @endforeach
  {{ $posts->links() }}
  <script src="/js/main.js"></script>
@endsection