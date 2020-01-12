@extends('layouts.default')

@section('title', 'Quotes')

@section('content')
  @include('components.post_single')
  @include('components.comments')
  @include('components.comment_form')
@endsection
