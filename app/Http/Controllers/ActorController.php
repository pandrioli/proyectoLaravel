<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;

class ActorController extends Controller
{
    public function show($id) {
      $actor = Actor::Find($id);
      return view('verActor', compact('actor'));
    }
    public function directory() {
      $listaActores = Actor::paginate(2);
      return view('actores', compact('listaActores'));
    }
    public function search(Request $request) {
      $nombre = $request->input('nombre');
      $listaActores = Actor::Where('first_name', 'like', '%'.$nombre.'%')
        ->orWhere('last_name', 'like', '%'.$nombre.'%')
        ->paginate(2);
        return view('actores', compact('listaActores'));
    }

    public function new() {
      $actor = new Actor();
      return view('editarActor', compact('actor'));
    }

    public function edit($id) {

      $actor = Actor::find($id);
      return view('editarActor', compact('actor'));
    }

    public function add(Request $request) {
      $this->validar($request);
      $actor = new Actor($request->all());
      $actor->save();
      return redirect()->route('all_actors');
    }

    public function update($id, Request $request) {
      $this->validar($request);
      $actor = Actor::find($id);
      $actor->fill($request->all())->save();
      return redirect()->route('all_actors');
    }

    public function delete($id) {
      $actor = Actor::find($id);
      $actor->delete();
      return redirect()->route('all_actors');
    }

    private function validar($request) {
      $this->validate($request, [
          'first_name' => 'required',
          'last_name' => 'required'
      ]);
    }


}
