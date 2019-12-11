@extends('layouts.default')

@section('title', 'Quotes')

@section('content')
  <div class="card quote">
    <div class="content">
      <img class="" alt="noimage", src="/storage/no_image.png" width="50" height="50">
      {!! nl2br(e($post->body)) !!}
      @isset($post->translation)
        <div class="translation">
          {!! nl2br(e($post->translation)) !!}
        </div>
      @endisset
      <div class="source">
        {{ $post->source }}
      </div>
    </div>
    <div class="card-footer">
      マルクス
    </div>
  </div>
@endsection
