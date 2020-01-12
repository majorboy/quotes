@foreach($posts as $post)
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
        <a href="{{ url('/users', $post->user->id) }}">{{ $post->user->name }}</a> 
      </div>
      <div class="comment">
        <a href="{{ action('PostsController@show', $post)}}">コメント</a>
        <span class="count">{{ $post->comments()->count()}}</span>
      </div>
      @if(Auth::check() && Auth::user()->is_stock($post->id))
        <a href="#" data-id="{{$post->id}}" class="unstock">ストック解除</a>
        <span class="count">{{ $post->stock_users()->count()}}</span>
        <form method="post" action="{{ route('stocks.unstock', $post->id) }}" id="unstock_{{ $post->id }}"> 
          {{ csrf_field() }}
          {{ method_field('delete') }}
        </form>
      @else
        <a href="#" data-id="{{$post->id}}" class="stock">ストックする</a>
        <span class="count">{{ $post->stock_users()->count()}}</span>
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
