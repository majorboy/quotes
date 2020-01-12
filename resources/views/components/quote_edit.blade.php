<form method="post" action="{{ url('/posts', $post->id) }}" class="quote-form">
    {{ csrf_field() }}
    {{ method_field('patch') }}
    <div class="form-group">
      <label>Quote</label>
      <textarea name="body" rows="6" class="form-control quote" placeholder="Quoteを入力(最大500文字）">{{ old('body',$post->body) }}</textarea>
      @if($errors->has('body'))
        <div class="error">{{ $errors->first('body') }}</div>
      @endif
    </div>
    <div class="form-group">
      <label>Translation(任意）</label>
      <textarea name="translation" rows="6" class="form-control translation" placeholder="日本語訳を入力(最大500文字）">{{ old('translation', $post->translation) }}</textarea>
      @if($errors->has('translation'))
        <div class="error">{{ $errors->first('translation') }}</div>
      @endif
    </div>
    <div class="form-group">
      <label>Source</label>
      <input type="text" name="source" class="form-control" placeholder="作者・出典を入力(最大150文字）" autocomplete="off" value="{{ old('source', $post->source) }}">
      @if($errors->has('source'))
        <div class="error">{{ $errors->first('source') }}</div>
      @endif
    </div>
    <button type="submit" class="btn-primary">更新する</button>   
  </form>
