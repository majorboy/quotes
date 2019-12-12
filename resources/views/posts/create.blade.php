@extends('layouts.default')

@section('title', 'New Quote')

@section('content')
<div class="container">
  <form method="post" action="{{ url('/posts') }}">
    {{ csrf_field() }}
    <div class="form-group">
      <label>Quote</label>>
      <textarea name="body" class="form-control" placeholder="Quoteを入力"></textarea>
    </div>
    <div class="form-group">
      <label>Translation(任意）</label>
      <textarea name="translation" class="form-control" placeholder="日本語訳を入力"></textarea>
    </div>
    <div class="form-group">
      <label>Source</label>
      <input type="text" name="spurce" class="form-control" placeholder="作者・出典を入力">
    </div>
    <button type="submit">投稿する</button>   
  </form>
</div>
@endsection
