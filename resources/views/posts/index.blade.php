<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title></title>
  <link href="/css/app.css" rel="stylesheet" type="text/css">
</head>
<body>
  <header class="header">
    <div class="header__bar">
      <h1 class="title"><a href="/">Quotes</a></h1>
      <div class="nav">
        <a href="{{ route('login') }}">ログイン</a>
        @if (Route::has('register'))
          <a href="{{ route('register') }}">新規登録</a>
        @endif
      </div>
    </div>
  </header>
  <div class="container">
    @foreach($posts as $post)
    <div class="card quote">
      <div class="content">
        <img class="" alt="noimage", src="/storage/no_image.png" width="50" height="50">
        {{ $post->body }}
        @isset($post->translation)
          <div class="translation">
            {{ $post->translation }}
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
    @endforeach
    <div class="card quote">
      <div class="content">
        <img class="" alt="noimage", src="/storage/no_image.png" width="50" height="50">
        Be quick, but don’t hurry.
        <div class="translation">
          機敏であれ、しかし慌ててはいけない。
        </div>
        <div class="source">
        ジョン・ウッデン
        </div>
      </div>
      <div class="card-footer">
        マルクス
      </div>
    </div>
    <div class="card quote">
      <div class="content">
        <img class="" alt="noimage", src="/storage/no_image.png" width="50" height="50">
        Be quick, but don’t hurry.
        <div class="translation">
          機敏であれ、しかし慌ててはいけない。
        </div>
        <div class="source">
        ジョン・ウッデン
        </div>
      </div>
      <div class="card-footer">
        マルクス
      </div>
    </div>
    <div class="card quote">
      <div class="content">
        <img class="" alt="noimage", src="/storage/no_image.png" width="50" height="50">
        Be quick, but don’t hurry.
        <div class="translation">
          機敏であれ、しかし慌ててはいけない。
        </div>
        <div class="source">
        ジョン・ウッデン
        </div>
      </div>
      <div class="card-footer">
        マルクス
      </div>
    </div>
    <div class="card quote">
      <div class="content">
        <img class="" alt="noimage", src="/storage/no_image.png" width="50" height="50">
        Be quick, but don’t hurry.
        <div class="translation">
          機敏であれ、しかし慌ててはいけない。
        </div>
        <div class="source">
        ジョン・ウッデン
        </div>
      </div>
      <div class="card-footer">
        マルクス
      </div>
    </div>
    <div class="card quote">
      <div class="content">
        <img class="" alt="noimage", src="/storage/no_image.png" width="50" height="50">
        Be quick, but don’t hurry.
        <div class="translation">
          機敏であれ、しかし慌ててはいけない。
        </div>
        <div class="source">
        ジョン・ウッデン
        </div>
      </div>
      <div class="card-footer">
        マルクス
      </div>
    </div>

  </div>
</body>
</html>