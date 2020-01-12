<div class="card quote">
    <div class="content">
      @if($post->user->has_avatar())
        <img src="{{$post->user->getFirstMediaUrl('avatars', 'thumb') }}" width="50" height="50">
      @else
        <img src="https://quotesbucket.s3-ap-northeast-1.amazonaws.com/1/default-user.png" alt="noimage" width="50" height="50">
      @endif
      <div class="body">{!! nl2br(e($post->body)) !!}</div>
    </div>
      @isset($post->translation)
        <div class="translation">
        {!! nl2br(e($post->translation)) !!}
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
