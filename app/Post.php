<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
  // sempre meglio fare il fillable che serve sempre per i form
    protected $fillable = ['title','content', 'author', 'slug'];
}
