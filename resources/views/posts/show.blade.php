@extends('layouts.default')

@section('title', 'Quotes')

@section('content')
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
    </div>
</div>
<div class="comment-container">
  <ul class="comments list-unstyled">
    <li class="clearfix comment media">
      <img class="" alt="noimage" class="comment__icon align-self-start"  src="/storage/no_image.png" width="70" height="70">
      <div class="media-body">
        <h5 class="comment__user_name">marx</h5>
        <div class="comment__content">
          <div class="comment__content__text">
          誰かのことを批判したくなったときには、
          世間のすべての人がおまえのように恵まれているわけではないということをちょっと思いだしてみるのだ。

          Whenever you feel like criticizing anyone, 
          just remember that all the people in this world haven’t had the advantages that you’ve had.
          </div>
        </div>
      </div>
    </li>
    <li class="clearfix comment media">
      <img class="" alt="noimage" class="comment__icon align-self-start"  src="/storage/no_image.png" width="70" height="70">
      <div class="media-body">
        <h5 class="comment__user_name">marx</h5>
        <div class="comment__content">
          <div class="comment__content__text">
          誰かのことを批判したくなったときには、
          世間のすべての人がおまえのように恵まれているわけではないということをちょっと思いだしてみるのだ。

          Whenever you feel like criticizing anyone, 
          just remember that all the people in this world haven’t had the advantages that you’ve had.
          </div>
        </div>
      </div>
    </li>
    <li class="clearfix comment media">
      <img class="" alt="noimage" class="comment__icon align-self-start"  src="/storage/no_image.png" width="70" height="70">
      <div class="media-body">
        <h5 class="comment__user_name">marx</h5>
        <div class="comment__content">
          <div class="comment__content__text">
          誰かのことを批判したくなったときには、
          世間のすべての人がおまえのように恵まれているわけではないということをちょっと思いだしてみるのだ。

          Whenever you feel like criticizing anyone, 
          just remember that all the people in this world haven’t had the advantages that you’ve had.
          </div>
        </div>
      </div>
    </li>
    <li class="clearfix comment media">
      <img class="" alt="noimage" class="comment__icon align-self-start"  src="/storage/no_image.png" width="70" height="70">
      <div class="media-body">
        <h5 class="comment__user_name">marx</h5>
        <div class="comment__content">
          <div class="comment__content__text">
          誰かのことを批判したくなったときには、
          世間のすべての人がおまえのように恵まれているわけではないということをちょっと思いだしてみるのだ。

          Whenever you feel like criticizing anyone, 
          just remember that all the people in this world haven’t had the advantages that you’ve had.
          </div>
        </div>
      </div>
    </li>
    <li class="clearfix comment media">
      <img class="" alt="noimage" class="comment__icon align-self-start"  src="/storage/no_image.png" width="70" height="70">
      <div class="media-body">
        <h5 class="comment__user_name">marx</h5>
        <div class="comment__content">
          <div class="comment__content__text">
          誰かのことを批判したくなったときには、
          世間のすべての人がおまえのように恵まれているわけではないということをちょっと思いだしてみるのだ。

          Whenever you feel like criticizing anyone, 
          just remember that all the people in this world haven’t had the advantages that you’ve had.
          </div>
        </div>
      </div>
    </li>

  </ul>
</div>
@endsection
