    @extends('layouts.default')
    @section('titulo_pagina','Mascotas | Crear mascota')
    @section('titulo','Mascotas')
    @section('subtitulo','Crear mascota')
    @section('contenido')

    <form action="{{route('mascotas.store')}}" method="post">
    @csrf
        <label>Especie</label>
        <select class="form-control" name="especie" required>
            <option disabled selected value="">Elige una especie</option>
            @foreach($especies as $especie)
                <option value="{{$especie->ID}}">{{$especie->Nombre}}</option>
            @endforeach
        </select>
        <br/>
        <label>Nombre</label>
        <input class="form-control" type="text" name="nombre" placeholder="Nombre de la mascota" required>
        <br/>
        <label>Precio</label>
        <input class="form-control" type="text" name="precio" placeholder="Precio de la mascota" required>
        <br/>
        <label>Fecha de nacimiento</label>
        <input class="form-control" type="date" name="nacimiento" required>
        <br/>
        <button class="btn btn-primary btn-lg" type="submit">Crear nueva mascota </button>
    </form>

    @endsection