@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Tutti i Post</h1>
    <table class="table">
      <thread>
        <tr>
          <th>ID</th>
          <th>Titolo</th>
          <th>Autore</th>
          <th>Slug</th>
          <th>Creato il</th>
          <th>Aggiornato il</th>
        </tr>
      </thread>
      @forelse ($posts as $post )
        <tr>
          <td>{{ $post->id}}</td>
          <td>{{ $post->title}}</td>
          <td>{{ $post->author}}</td>
          <td>{{ $post->slug}}</td>
          <td>{{ $post->created_at}}</td>
          <td>{{ $post->updated_at}}</td>
        </tr>
      @empty
        <em>Non ci sono post</em>
      @endforelse
    </table>
  </div>
@endsection
