@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Tutti i Post</h1>
    <ul>
    @forelse ($posts as $post )
      <li>
        <a href="{{ route('posts.show', $post->slug) }}">{{ $post->title}}</a>
        , pubblicato da {{$post->author}} il {{$post->created_at}},
        <em>
          @if (!empty($post->category))
            (<a href="{{ route('posts.category', $post->category->name)}}">{{$post->category->name}}</a>)
          @else
            (category n.a.)
          @endif
        </em>
      </li>
    @empty
      <em>Non ci sono post</em>
    @endforelse
    </ul>
  </div>
@endsection
