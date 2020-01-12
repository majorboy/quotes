@extends('layouts.default')

@section('title', 'Quotes')

@section('content')
  <h3 class="stock_user_name">Stocks by {{ $user->name }}</h3>
  @if (session('flash_message'))
      <div class="alert alert-success">
          {{ session('flash_message') }}
      </div>
  @endif
  @include('components.post')
@endsection
