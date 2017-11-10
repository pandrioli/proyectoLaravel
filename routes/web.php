<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return "<h1>Bienvenidx</h1>";
});

Route::get('/miPrimerRuta', function () {
  return "Cree mi primer ruta en Laravel";
});

Route::get('/resultado/{numero1}/{numero2?}', function ($numero1, $numero2 = null) {
  return $numero2==null ? ($numero1 % 2 == 0 ? "$numero1 es par" : "$numero1 es impar")
  : "$numero1 x $numero2 = ".($numero1 * $numero2);
});

Route::get('/peliculas', 'MoviesController@mostrarPeliculas');
Route::get('/peliculas/{id}', 'MoviesController@buscarPeliculaId');
Route::get('/peliculas/buscar/{nombre}', 'MoviesController@buscarPeliculaNombre');
Route::get('/agregarPelicula', 'MoviesController@nuevaPelicula');
Route::post('/agregarPelicula', 'MoviesController@agregarPelicula');

Route::get('/actores', 'ActorController@directory');
Route::get('/actores/{id}', 'ActorController@show');
Route::post('/actores/buscar', 'ActorController@search');