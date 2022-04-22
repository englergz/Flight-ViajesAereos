@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h1> Rutas </h1>
        <div align="right">
            <form action ="{{route('buscarRuta')}}" method="POST" >
            @csrf
            <div align="right" class=" col-md-3 input-group mb-3">
                <input type="text" class="form-control" placeholder="Nombre de ruta" aria-label="Username" 
                aria-describedby="basic-addon1" id="nombre" name="nombre" required>
            </div>
                <button type="submit" class=" btn btn-success">Buscar</button>
                <a href="{{ route('crearRuta') }}" class="btn btn-primary">Crear nueva ruta</a>
             </form>
            
        </div>
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Origen</th>
                    <th scope="col">Destino </th>
                    <th scope="col" colspan=2> Opciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($rutas as $c)
                <tr>
                <td>{{ $c->origen_descripcion  }} ({{ $c->origen }})</td>
                <td>{{ $c->destino_descripcion }} ({{ $c->destino }})</td>
                <td> <a href="{{ route('form_actualizaRuta',$c->id) }}" class="btn btn-success">Editar</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>

        </div>
    </div>
</div>
@stop