<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
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
        <a href="{{ url('/posts/create') }}">Quote</a>
      </div>
    </div>
  </header>
  <div class="container">
    @yield('content')
  </div>
</body>
</html>