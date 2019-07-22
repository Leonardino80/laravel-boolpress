@extends('layouts.app')

@section('content')
  <div class="container">
    <h1>Creazione nuovo post</h1>
    {{-- form che punta a Store, for e name sempre uguali alla variabile da mandare --}}
    <form action="{{route('admin.posts.store')}}" method="post">
      @csrf
      <div class=" form-group">
        <label for="title">Titolo</label>
        <input class="form-control" type="text" name="title" value="{{ old('title')}}">
      </div>
      <div class=" form-group">
        <label for="author">Autore</label>
        <input class="form-control"  type="text" name="author" value="{{ old('author')}}">
      </div>
      <div class=" form-group">
        <label for="content">Testo del post</label>
        <textarea  class="form-control" name="content" rows="8" cols="80">{{ old('content')}}</textarea>
      </div>
      <div class="form-group">
        <select class="form-control" name="category_id">
          <option value="">Seleziona categoria</option>
          @foreach ($categories as $category)
            <option value="{{ $category->id}}">{{ $category->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="form-group">
        <input type="submit" value="Salva">
      </div>
    </form>
  </div>
@endsection
