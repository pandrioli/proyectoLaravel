<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{
  public function show($genre_id) {
    $genre = Genre::find($genre_id);
    $peliculas = $genre->movies;
    return view('peliculas', compact('peliculas','genre'));
  }
}
