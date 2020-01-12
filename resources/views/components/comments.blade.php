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
