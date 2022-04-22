@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h1> Actualizar Vuelo </h1>
        <form  action="{{route('actualizarVuelo', $vuelo->id) }}" method="POST">
            @csrf
            <div class}="col-md-8">
                <label for="ruta">Ruta</label>
                <select class="form-control" required name='ruta' id="ruta" onchange='this.form.()'>
                    <option value="{{$vuelo->ruta->id}}">
                     {{ $vuelo->ruta->origen_descripcion }} ({{ $vuelo->ruta->origen }}) - 
                     {{ $vuelo->ruta->destino_descripcion }} ({{ $vuelo->ruta->destino }})
                    </option>
                    @foreach ($rutas as $r)
                    <option value="{{$r->id}}">
                    {{ $r->origen_descripcion }} ({{ $r->origen }}) - {{ $r->destino_descripcion }} ({{ $r->destino }})
                    </option>
                    @endforeach
                </select> <br> <br>
            
                <label for="salida">Salida</label>
                <input type="text" id='salida' name='salida' class="form-control" 
                required value="{{$vuelo->fecha_salida }}"> <br> <br>

                <label for="llegada">Llegada</label>
                <input type="text" id='llegada' name='llegada' 
                class="form-control" required value="{{$vuelo->fecha_llegada}}"> <br> <br>
                    
                <button type="submit" class="btn btn-success"> Actualizar </button>
                <a type="submit" class="btn btn-danger" href="{{route('vuelos')}}">Cancelar</a>
            </div>
        </form>
        </div>
    </div>
</div>
@stop