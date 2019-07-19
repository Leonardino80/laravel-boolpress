@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>{{ $post->title }}</h1>
    <p>{{ $post->content}}</p>
    <em>{{ $post->author}}</em>
    <span>{{ $post->created_at}}</span>
  </div>
@endsection
