@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h1> Vuelos </h1>
        <div align="right">
            <a href="{{ route('crearVuelo') }}" class="btn btn-primary">Nuevo vuelo</a>
        </div>
        <br>

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
            @foreach($vuelos as $c)
                <tr>
                <td>{{ $c->ruta->origen_descripcion }} ({{ $c->ruta->origen }}) - {{ $c->ruta->destino_descripcion }} ({{ $c->ruta->destino }})</td>
                <td>{{ $c->fecha_salida }}</td>
                <td>{{ $c->fecha_llegada }}</td>
                <td> <a href="{{ route('formPasaje',$c->id) }}" class="btn btn-primary">Vender</a></td>
                <td> <a href="{{ route('form_actualizaVuelo',$c->id) }}" class="btn btn-success">Editar</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>

        </div>
    </div>
</div>
@stop