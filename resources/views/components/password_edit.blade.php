<div class="row justify-content-center">
    <div class="col-md-10">
        <div class="card auth">
            <div class="card-header">{{ __('パスワード変更') }}</div>
            @if (session('change_password_success'))
              <div class="alert alert-success">
                {{ session('change_password_success') }}
              </div>
            @endif
            @if (session('change_password_error'))
              <div class="alert alert-danger">
                {{ session('change_password_error') }}
              </div>
            @endif
            <div class="card-body">
                <form method="POST" action="{{route('pass')}}">
                    {{ csrf_field() }}
                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('現在のパスワード') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="current-password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('新パスワード') }}</label>

                        <div class="col-md-6">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="new-password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('新パスワード（確認）') }}</label>

                        <div class="col-md-6">
                            <input id="password-confirm" type="password" class="form-control" name="new-password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="form-group row mb-0">
                        <div class="col-md-6 offset-md-4">
                            <button type="submit" class="btn btn-primary">
                                {{ __('変更する') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
