@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Tutti i Post</h1>
    <a class="btn btn-primary" style="width:100px" href="{{ route('admin.posts.create')}}">Nuovo post</a>
    <table class="table">
      <thread>
        <tr>
          <th>Azioni</th>
          <th>ID</th>
          <th>Categoria</th>
          <th>Titolo</th>
          <th>Autore</th>
          <th>Slug</th>
          <th>Creazione</th>
          <th>Aggiornamento</th>
        </tr>
      </thread>
      @forelse ($posts as $post )
        <tr>
          <td>
            <a class="btn btn-warning" style="width:100px" href="{{ route('admin.posts.show', $post->id)}}">Visualizza</a>
            <a class="btn btn-info"    style="width:100px" href="{{ route('admin.posts.edit', $post->id)}}">Edita</a>
            <form action="{{ route('admin.posts.destroy', $post->id)}}" method="post">
              @csrf
              @method('DELETE')
              <input type="submit" style="width:100px" class="btn btn-danger" value="Cancella">
            </form>
          </td>
          <td>{{ $post->id}}</td>
          <td>{{ !empty($post->category) ? $post->category->name : '-' }}</td>
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
