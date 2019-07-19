<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// richiamo Post in quanto richiamato nella show
use App\Post;

class PostController extends Controller
{
  public function show($slug){
    $post = Post::where('slug', $slug)->first();
    if(empty($post)){
      abort(404);
    }
    return view('posts.show', compact('post'));
  }
}
