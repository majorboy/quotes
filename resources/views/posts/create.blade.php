@extends('layouts.default')

@section('title', 'New Quote')

@section('content')
  <form method="post" action="{{ url('/posts') }}" class="quote-form">
    {{ csrf_field() }}
    <div class="form-group">
      <label>Quote</label>
      <textarea name="body" rows="6" class="form-control quote" placeholder="Quoteを入力"></textarea>
    </div>
    <div class="form-group">
      <label>Translation(任意）</label>
      <textarea name="translation" rows="6" class="form-control translation" placeholder="日本語訳を入力"></textarea>
    </div>
    <div class="form-group">
      <label>Source</label>
      <input type="text" name="source" class="form-control" placeholder="作者・出典を入力" autocomplete="off">
    </div>
    <button type="submit" class="btn-primary">投稿する</button>   
  </form>
@endsection
