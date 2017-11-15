<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
use App\Genre;
class MoviesController extends Controller
{
  public function verPelicula($id) {
    $pelicula = Movie::find($id)->with('actors')->first();
    return view('verPelicula', compact('pelicula'));
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
    $generos = Genre::all();
    return view('agregarPelicula', compact('generos'));
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
