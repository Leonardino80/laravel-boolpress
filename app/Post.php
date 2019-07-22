<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
// sempre meglio fare il fillable che serve sempre per i form
  protected $fillable = ['title','content', 'author', 'slug', 'category_id'];

  public function category(){
    return $this->belongsTo('App\Category');
  }

  public function tags(){
    return $this->belongToMany('App\Tag');
  }
}
