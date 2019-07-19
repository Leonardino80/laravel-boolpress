<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// richiamo Post in quanto richiamato nella show
use App\Post;
// richiamo Post in quanto richiamato nella PostInCategory
use App\Category;

class PostController extends Controller
{
  public function show($slug){
    $post = Post::where('slug', $slug)->first();
    if(empty($post)){
      abort(404);
    }
    return view('posts.show', compact('post'));
  }

  public function PostInCategory($slug){
  $category = Category::where('slug', $slug)->first();
  if(empty($category)){
    abort(404);
  }
  $posts = $category->posts;
  return view('posts.category')-> with([
    'posts' => $posts,
    'category' => $category
    ]);
  }
}
