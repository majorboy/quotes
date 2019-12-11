@extends('layouts.default')

@section('title', 'Quotes')

@section('content')
  @foreach($posts as $post)
  <div class="card quote">
    <div class="content">
      <img class="" alt="noimage", src="/storage/no_image.png" width="50" height="50">
      {{ $post->body }}
      @isset($post->translation)
        <div class="translation">
          {{ $post->translation }}
        </div>
      @endisset
      <div class="source">
        {{ $post->source }}
      </div>
    </div>
    <div class="card-footer">
      <div class="user">
        マルクス
      </div>
      <div class="comment">
        <a href="{{ action('PostsController@show', $post)}}">コメント</a>
      </div>
    </div>
  </div>
  @endforeach
  <div class="card quote">
    <div class="content">
      <img class="" alt="noimage", src="/storage/no_image.png" width="50" height="50">
      Be quick, but don’t hurry.
      <div class="translation">
        機敏であれ、しかし慌ててはいけない。
      </div>
      <div class="source">
      ジョン・ウッデン
      </div>
    </div>
    <div class="card-footer">
      マルクス
    </div>
  </div>
  <div class="card quote">
    <div class="content">
      <img class="" alt="noimage", src="/storage/no_image.png" width="50" height="50">
      Be quick, but don’t hurry.
      <div class="translation">
        機敏であれ、しかし慌ててはいけない。
      </div>
      <div class="source">
      ジョン・ウッデン
      </div>
    </div>
    <div class="card-footer">
      マルクス
    </div>
  </div>
  <div class="card quote">
    <div class="content">
      <img class="" alt="noimage", src="/storage/no_image.png" width="50" height="50">
      Be quick, but don’t hurry.
      <div class="translation">
        機敏であれ、しかし慌ててはいけない。
      </div>
      <div class="source">
      ジョン・ウッデン
      </div>
    </div>
    <div class="card-footer">
      マルクス
    </div>
  </div>
  <div class="card quote">
    <div class="content">
      <img class="" alt="noimage", src="/storage/no_image.png" width="50" height="50">
      Be quick, but don’t hurry.
      <div class="translation">
        機敏であれ、しかし慌ててはいけない。
      </div>
      <div class="source">
      ジョン・ウッデン
      </div>
    </div>
    <div class="card-footer">
      マルクス
    </div>
  </div>
  <div class="card quote">
    <div class="content">
      <img class="" alt="noimage", src="/storage/no_image.png" width="50" height="50">
      Be quick, but don’t hurry.
      <div class="translation">
        機敏であれ、しかし慌ててはいけない。
      </div>
      <div class="source">
      ジョン・ウッデン
      </div>
    </div>
    <div class="card-footer">
      マルクス
    </div>
  </div>
@endsection

