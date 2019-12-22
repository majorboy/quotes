<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link href="/css/app.css" rel="stylesheet" type="text/css">
  <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
  <header class="header">
    <div class="header__bar">
      <h1 class="title"><a href="/">Quotes</a></h1>
      <div class="nav">
      @guest
        <a href="{{ route('login') }}" class="nav__item">ログイン</a>
        <a href="{{ route('register') }}" class="nav__item">新規登録</a>
      @else
        <a href="{{ url('/posts/create') }}" class="nav__item">投稿する</a>
        <a href="{{ route('logout') }}" class="nav__item">ログアウト</a>
        @if(Auth::user()->has_avatar())
          <img src="{{Auth::user()->getFirstMediaUrl('avatars', 'thumb') }}" class="nav__icon" width="35" height="35">
        @else
          <img src="/storage/default-user.png" alt="noimage" class="nav__icon" width="35" height="35">
        @endif
        <!-- <a href="{{action('StocksController@index', auth()->id())}}">ストック一覧</a>
        <a href="{{ url('/users', auth()->id()) }}">マイページ</a> -->
      @endguest
      </div>
    </div>
  </header>
  <div class="container">
    @yield('content')
  </div>
</body>
</html>