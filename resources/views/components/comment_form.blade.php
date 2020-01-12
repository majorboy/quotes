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
