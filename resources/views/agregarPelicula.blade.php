@extends('base')

@section('content')
        <form id="agregarPelicula" name="agregarPelicula" method="POST">
            {{ csrf_field() }}
            <div>
                <label for="titulo">Titulo</label>
                <input type="text" name="title" id="titulo" value="{{old('title')}}"/>
            </div>
            <div>
                <label for="rating">Rating</label>
                <input type="text" name="rating" id="rating" value="{{old('rating')}}"/>
            </div>
            <div>
                <label for="premios">Premios</label>
                <input type="text" name="awards" id="premios" value="{{old('awards')}}"/>
            </div>
            <div>
                <label for="duracion">Duracion</label>
                <input type="text" name="length" id="duracion" value="{{old('duracion')}}"/>
            </div>
            <div>
                <label>Fecha de Estreno</label>
                <select name="dia">
                    <option value="">Dia</option>
                    <?php for ($i=1; $i < 32; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <select name="mes">
                    <option value="">Mes</option>
                    <?php for ($i=1; $i < 13; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
                <select name="anio">
                    <option value="">Anio</option>
                    <?php for ($i=1900; $i < 2017; $i++) { ?>
                        <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                    <?php } ?>
                </select>
            </div>
            <input type="submit" value="Agregar Pelicula" name="submit"/>
            <ul>
              @forelse ($errors->All() as $error)
                <li>{{$error}}</li>
              @empty
              @endforelse
            </ul>
        </form>
@endsection
