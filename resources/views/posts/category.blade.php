@extends('layouts.app')

@section('content')
  <div class="container">
    <ul>
      <h1>Tutti i Post della categoria {{ $category->name }}</h1>
      @forelse ($posts as $post )
        <li>
          <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title}}</a>
          , pubblicato da {{$post->author}} il {{$post->created_at}}.
        </li>
      @empty
        <em>Non ci sono post</em>
      @endforelse
    </ul>
  </div>
@endsection
