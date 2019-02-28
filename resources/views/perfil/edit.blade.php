    @extends('layouts.default')
    @section('titulo_pagina','Mascotas | Dashboard')
    @section('titulo','Mascotas')
    @section('subtitulo','Dashboard')
    @section('contenido')

    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <h3 class="box-title">Table de lista de mascota</h3>
                </div>

                
                <div class="box-body">
                    
                    <form method="POST" action="{{route('perfil.update', $usuario->id)}}" enctype="multipart/form-data">
                    @csrf 
                    @method('PUT')

                    @if(Session::has('exito'))
                    <div class="alert alert-success alert-dismissible" style="margin-top:20px;">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-check"></i>¡A huevo!</h4>
                        {{ Session::get('exito') }}
                    </div>
                    @endif

                    @if(Session::has('error'))
                    <div class="alert alert-danger alert-dismissible" style="margin-top:20px;">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-ban"></i> Algo valio madre :(</h4>
                        {{ Session::get('error') }}
                    </div>
                    @endif

                        <div class="form-group">
                            
                            <label>Nombre</label>
                            <input name="nombre" type="text" class="form-control" value="{{$usuario->name}}">

                        </div>
                        <div class="form-group">
                            
                            <label>Correo</label>
                            <input type="text" class="form-control" value="{{$usuario->email}}">

                        </div>
                        <div class="form-group">
                            
                            <label>Contraseña</label>
                            <input type="text" class="form-control">

                        </div>
                        <div class="form-group">
                            
                            <label>Confirmar contraseña</label>
                            <input type="text" class="form-control">

                        </div>

                        <div class="form-group">
                            
                            <label>Foto</label>
                            <input type="file" class="form-control" name="foto">

                        </div>

                        <div class="form-group">
                            
                            @if($usuario->foto_perfil)
                            <img src="/storage/{{$usuario->foto_perfil}}" class="img-responsive" style="width:200px; height:200px">
                            
                            @endif
                        </div>

                        <div class="form-group">
                            
                            
                            <button type="submit" class="btn btn-primary">Guardar cambios</button>

                        </div>



                        



                    </form>

                </div>
            </div>
        </div>  
    </div>
</div>



    @endsection