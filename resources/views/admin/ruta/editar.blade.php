@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h1> Actualizar Ruta </h1>
        <form  action="{{route('actualizarRuta', $ruta->id) }}" method="POST">
            @csrf
            <div class}="col-md-8">
                <label for="origen_descripcion">Origen</label>
                <input type="text" id='origen_descripcion' name='origen_descripcion' class="form-control" 
                required value="{{$ruta->origen_descripcion}}"> <br> <br>
            
                <label for="origen">Abreviatura origen</label>
                <input type="text" id='origen' name='origen' class="form-control" 
                required value="{{$ruta->origen }}"> <br> <br>

                <label for="destino_descripcion">Destino</label>
                <input type="text" id='destino_descripcion' name='destino_descripcion' 
                class="form-control" required value="{{$ruta->destino_descripcion}}"> <br> <br>
            
                <label for="destino">Abreviatura destino</label>
                <input type="text" id='destino' name='destino' class="form-control" 
                required value="{{$ruta->destino}}"> <br> <br>

                <label for="precio">Precio</label>
                <input type="text" id='precio' name='precio' 
                class="form-control" required value="{{$ruta->precio}}"> <br> <br>

                <label for="foto">Foto</label>
                <input type="file" id='foto' name='foto' class="form-control" 
                value="{{$ruta->foto}}"> <br> <br>
                    
                <button type="submit" class="btn btn-success"> Actualizar </button>
                <a type="submit" class="btn btn-danger" href="{{route('rutas')}}">Cancelar</a>
            </div>
        </form>
        </div>
    </div>
</div>
@stop