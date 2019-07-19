<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;
use App\category;

class PostController extends Controller
{
  public function index()
  {
    $posts = Post::all();
    return view('admin.posts.index', compact('posts'));
  }

  public function create()
  {
    $categories = category::all();
    return view('admin.posts.create')->with([
      'categories' => $categories
    ]);
  }

  public function store(Request $request)
  {
      //
  }

  public function show($id)
  {
    // show rudimentale che si arriva tramite url http://localhost:8000/admin/posts/1
    return 'pagina  di visualizzazione singolo post Backoffice. Post con id' . $id ;
  }

  public function edit($id)
  {
      //
  }

  public function update(Request $request, $id)
  {
      //
  }

  public function destroy($id)
  {
      //
  }
}
