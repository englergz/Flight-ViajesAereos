@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h1> Busqueda de Clientes: "{{$cliente}}"</h1>
        <br>
            @if($clientes)
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">CC</th>
                    <th scope="col">Nombre </th>
                    <th scope="col">Celular </th>
                    <th scope="col" colspan=2> Opciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($clientes as $c)
                <tr>
                <td>{{ $c->CC }}</td>
                <td>{{ $c->nombre }}</td>
                <td>{{ $c->celular }}</td>
                <td> <a href="{{ route('form_actualizaCliente',$c->id) }}" class="btn btn-success">Editar</a></td>
            </tr>
            @endforeach
            </tbody>
        </table>
        
        @else
        <h4> No hay resultados...</h4>
        @endif
        <a href="{{ route('clientes') }}" class="btn btn-success">Regresar</a>
        </div>
    </div>
</div>
@stop