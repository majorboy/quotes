@extends('layouts.default')

@section('title', 'Quotes')

@section('content')
  <h3 class="stock_user_name">Stocks by {{ $user->name }}</h3>
  @include('components.post')
@endsection
