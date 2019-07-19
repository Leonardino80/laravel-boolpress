@extends('layouts.app')

@section('content')
  <ul>
  @forelse ($posts as $post )

    <li>{{ $post->title}}, pubblicato da {{$post->author}} il {{$post->created_at}}</li>

  @empty
    <em>Non ci sono post</em>
  @endforelse
  </ul>
@endsection
