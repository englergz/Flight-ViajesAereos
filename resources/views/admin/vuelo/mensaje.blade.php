@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h1>Todos los vuelos disponibles</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Ruta</th>
                    <th scope="col">Salida </th>
                    <th scope="col">Llegada </th>
                    <th scope="col" colspan=2> Opciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($vuelosALL as $c)
                <tr>
                <td>{{ $c->ruta->origen }} - {{ $c->ruta->destino_descripcion }}</td>
                <td>{{ $c->fecha_salida }}</td>
                <td>{{ $c->fecha_llegada }}</td>
                <td> <a href="{{ route('formPasaje',$c->id) }}" class="btn btn-success">Comprar pasaje</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        <a href="{{ route('home') }}" class="btn btn-success">Regresar</a>
        </div>
    </div>
</div>
@stop