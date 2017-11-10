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

  public function agregarPelicula(Request $request) {
    $this->validate($request, [
        'title' => 'required|max:255',
        'rating' => 'required|numeric|between:1,10',
        'length' => 'required|numeric'
    ], [
        'title.required' => 'El titulo es requerido'
    ]);

    $pelicula = new Movie($request->all());
    $release_date = $request->input('anio').'-'.$request->input('mes').'-'.$request->input('dia');
    $pelicula->release_date = date('Y-m-d', strtotime($release_date));
    $pelicula->save();
    return redirect()->route('all_movies');
  }

}
