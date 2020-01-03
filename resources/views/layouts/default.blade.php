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
        <a href="{{ route('logout') }}" class="nav__item" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">ログアウト</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
        </form>
        @if(Auth::user()->has_avatar())
          <div class="menu">
            <img src="{{Auth::user()->getFirstMediaUrl('avatars', 'thumb') }}" class="menu__icon" width="35" height="35">
            <ul class="menu__list">
              <li class="menu__list__item">
                <a href="{{ url('/users', auth()->id()) }}">マイページ</a>
              </li>
              <li class="menu__list__item">
                <a href="{{action('StocksController@index', auth()->id())}}">ストック一覧</a>
              </li>
            </ul>
          </div>
        @else
          <div class="menu">
            <img src="https://quotesbucket.s3-ap-northeast-1.amazonaws.com/1/default-user.png" alt="noimage" class="nav__icon" width="35" height="35">
            <ul class="menu__list">
              <li class="menu__list__item">
                <a href="{{ url('/users', auth()->id()) }}">マイページ</a>
              </li>
              <li class="menu__list__item">
                <a href="{{action('StocksController@index', auth()->id())}}">ストック一覧</a>
              </li>
            </ul>
          </div>
        @endif
      @endguest
      </div>
    </div>
  </header>
  <div class="container">
    @yield('content')
  </div>
</body>
</html>