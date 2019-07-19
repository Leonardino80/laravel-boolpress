@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Tutti i Post</h1>
    <ul>
    @forelse ($posts as $post )
      <li><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title}}</a>, pubblicato da {{$post->author}} il {{$post->created_at}}</li>
    @empty
      <em>Non ci sono post</em>
    @endforelse
    </ul>
  </div>
@endsection
