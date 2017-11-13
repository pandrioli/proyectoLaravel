<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['title', 'rating', 'awards', 'length', 'release_date'];
    public function genre() {
      return $this->belongsTo(Genre::class);
    }
}
