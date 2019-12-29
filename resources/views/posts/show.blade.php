@extends('layouts.default')

@section('title', 'Quotes')

@section('content')
<div class="card quote">
    <div class="content">
      @if($post->user->has_avatar())
        <img src="{{$post->user->getFirstMediaUrl('avatars', 'thumb') }}" width="50" height="50">
      @else
        <img src="https://quotesbucket.s3-ap-northeast-1.amazonaws.com/1/default-user.png" alt="noimage" width="50" height="50">
      @endif
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
    </div>
</div>
<div class="comment-container">
  <ul class="comments list-unstyled">
    @foreach($post->comments as $comment)
      <li class="clearfix comment media">
        @if($comment->user->has_avatar())
          <img src="{{$comment->user->getFirstMediaUrl('avatars', 'thumb')}}" width="50" height="50">
        @else
          <img src="https://quotesbucket.s3-ap-northeast-1.amazonaws.com/1/default-user.png" alt="noimage" width="50" height="50">
        @endif
        <div class="media-body">
          <div class="comment__head">
            <h5 class="comment__head__user_name">{{ $comment->user->name }}</h5>
            @can('delete',$comment)
              <a href="#" data-id="{{$comment->id}}" class="comment__head__delete">削除</a>
              <form method="post" action="{{ action('CommentsController@destroy', [$post,$comment])}}" id="comment_{{ $comment->id }}"> 
                {{ csrf_field() }}
                {{ method_field('delete') }}
              </form>
            @endcan
          </div>
          <div class="comment__content">
          <div class="comment__content__text">
            {!! nl2br(e($comment->content)) !!}
          </div>
        </div>
        </div>
      </li>
    @endforeach
  </ul>
  <form method="post" action="{{ action('CommentsController@store', $post) }}">
    {{ csrf_field() }}
    <div class="form-group comment-form">
      <label>コメント</label>
      <textarea name="content" rows="6" class="form-control comment-form__field" placeholder="コメントを入力(最大150文字）">{{ old('content') }}</textarea>
      @if($errors->has('content'))
        <div class="error">{{ $errors->first('content') }}</div>
      @endif
    </div>
    <button type="submit" class="btn-primary submit">投稿する</button>   
  </form>
</div>
@endsection
