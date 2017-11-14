<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Movie extends Model
{
    use SoftDeletes;
    protected $fillable = ['title', 'rating', 'awards', 'length', 'release_date', 'genre_id'];
    protected $dates = ['deleted_at'];
    public function genre() {
      return $this->belongsTo(Genre::class);
    }
    public function actors() {
      return $this->belongsToMany(Actor::class, 'actor_movie', 'movie_id', 'actor_id');
    }
}
