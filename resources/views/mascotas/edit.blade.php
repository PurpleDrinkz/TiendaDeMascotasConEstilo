
    @extends('layouts.default')
    @section('titulo_pagina','Mascotas | Crear mascota')
    @section('titulo','Mascotas')
    @section('subtitulo','Crear mascota')
    @section('contenido')
    
    <form action="{{route('mascotas.update',$mascota->ID)}}" method="post">
    @csrf
    @method('PUT')
        <label>Especie</label>
        <select class="form-control" name="especie" required>
            <option disabled value="">Elige una especie</option>
            @foreach($especies as $especie)
                <option value="{{$especie->ID}}" @if($especie->ID == $mascota->ID_especie) selected @endif >{{$especie->Nombre}}</option>
            @endforeach
        </select>
        <br/>
        <label>Nombre</label>
        <input class="form-control" type="text" name="nombre" placeholder="Nombre de la mascota" value="{{$mascota->Nombre}}" required>
        <br/>
        <label>Precio</label>
        <input class="form-control" type="text" name="precio" placeholder="Precio de la mascota" value="{{$mascota->Precio}}" required>
        <br/>
        <label>Fecha de nacimiento</label>
        <input class="form-control" type="date" name="nacimiento" value="{{$mascota->Nacimiento}}" required>
        <br/>
        <button class="btn btn-primary btn-lg" type="submit">Actualizar mascota </button>
    </form>

    @endsection