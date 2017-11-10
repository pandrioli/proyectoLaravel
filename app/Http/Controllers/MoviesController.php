<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class MoviesController extends Controller
{
  public function buscarPeliculaId($id) {
    $peliculas = [];
    $pelicula = Movie::find($id);
    if ($pelicula !== NULL) $peliculas[]=$pelicula;
    return view('peliculas', compact('peliculas'));
  }
  public function buscarPeliculaNombre($nombre) {
    $peliculas = Movie::Where('title', 'like', '%'.$nombre.'%')->get();
    return view('peliculas', compact('peliculas'));
  }

  public function mostrarPeliculas() {
    $peliculas = Movie::All();
    return view('peliculas', compact('peliculas'));
  }

  public function nuevaPelicula() {
    return view('agregarPelicula');
  }

  public function agregarPelicula() {
    return "Pelicula agregada con éxito";
  }

}
