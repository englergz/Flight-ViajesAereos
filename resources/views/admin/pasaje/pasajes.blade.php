@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h1> Pasajes </h1>
        <div align="right">
            <a href="{{ route('descargarPDF')}}" class="btn btn-primary"> Descargar reporte Pdf</a>
        </div>
        <br>

        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Vuelo</th>
                    <th scope="col">Cliente </th>
                    <th scope="col">Precio </th>
                    <th scope="col" colspan=2> Opciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($pasajes as $c)
                <tr>
                <td>
                Vuelo: {{ $c->vuelo->ruta->origen_descripcion}} ({{ $c->vuelo->ruta->origen }}) - {{ $c->vuelo->ruta->destino_descripcion }} ({{ $c->vuelo->ruta->destino }})
                <br>
                Fecha: {{ $c->vuelo->fecha_salida }} - {{ $c->vuelo->fecha_llegada }}
                </td>
                <td>
                {{ $c->cliente->nombre}}<br>
                CC: {{ $c->cliente->CC }}  -
                Celular: {{ $c->cliente->celular }}
                </td>
                <td>${{ $c->vuelo->ruta->precio }}</td>
                <td> <a href="{{ route('factura',$c->id) }}" class="btn btn-primary">Imprimir Factura</a> </td>
            </tr>
            @endforeach
            </tbody>
        </table>

        </div>
    </div>
</div>
@stop