@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h1> Busqueda de Rutas: "{{$ruta}}"</h1>
        <br>
        @if($rutas)
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
                <td> <a href="{{ route('eliminarRuta',$c->id) }}" class="btn btn-danger">Eliminar</a> </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        
        @else
        <h4> No hay resultados...</h4>
        @endif
        <a href="{{ route('rutas') }}" class="btn btn-success">Regresar</a>
        </div>
    </div>
</div>
@stop