<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
    public function directory() {
      $listaActores = Actor::All();
      return $this->getView($listaActores);
    }
    public function show($id) {
      $listaActores = [];
      $actor = Actor::Find($id);
      if ($actor !== NULL) $listaActores[] = $actor;
      return $this->getView($listaActores);
    }
    public function search(Request $request) {
      $nombre = $request->input('nombre');
      $listaActores = Actor::Where('first_name', 'like', '%'.$nombre.'%')
        ->orWhere('last_name', 'like', '%'.$nombre.'%')
        ->get();
      return $this->getView($listaActores);
    }

    private function getView($listaActores) {
      return view('actores', compact('listaActores'));
    }

}
