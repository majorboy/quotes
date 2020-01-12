@extends('layouts.default')

@section('title', 'Quotes')

@section('content')
  <h3 class="mypage_user_name inline-item">Quotes by {{ $user->name }}</h3>
  @can('edit', $user)
    <a class="btn btn-primary user_profile inline-item" href="{{ action('UsersController@edit', $user)}}">プロフィール編集</a>
  @endcan
  @include('components.post')
@endsection

