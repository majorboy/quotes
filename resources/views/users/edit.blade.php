@extends('layouts.default')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card auth">
            <div class="card-header">{{ __('プロフィール編集') }}</div>

            <div class="card-body">
                <form method="POST" action="{{ route('register') }}"enctype="multipart/form-data">
                    @csrf

                    <div class="form-group row">
                        <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('名前') }}</label>

                        <div class="col-md-6">
                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                        <div class="col-md-6">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="avatar" class="col-md-4 col-form-label text-md-right">{{ __('アバター (任意)') }}</label>

                        <div class="col-md-6">
                             <input type="file" class="form-control avatar" name="avatar" id="avatar">
                        </div>
                    </div>
                    <div style="text-align:center;">
                        <button type="submit" class="btn btn-primary">
                            {{ __('更新する') }}
                        </button>
                        <a href="{{ action('UsersController@pass', Auth::user())}}" class="btn btn-primary ml-3">パスワード変更</a>
                    
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection