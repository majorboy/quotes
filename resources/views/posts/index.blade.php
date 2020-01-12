@extends('layouts.default')

@section('title', 'Quotes')

@section('content')
  @if (session('flash_message'))
      <div class="message alert alert-success">
          {{ session('flash_message') }}
      </div>
  @endif
  @include('components.post')
@endsection

