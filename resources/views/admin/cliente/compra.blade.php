@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <br> <br>
        <h1>Proceso finalizado exitosamente</h1>
        <h4>Guarda la factura como comprobante de compra</h4>
        <br>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Vuelo</th>
                    <th scope="col">Cliente </th>
                    <th scope="col">Precio </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>
                Vuelo: {{ $p->vuelo->ruta->origen_descripcion}} ({{ $p->vuelo->ruta->origen }}) - {{ $p->vuelo->ruta->destino_descripcion }} ({{ $p->vuelo->ruta->destino }})
                <br>
                Fecha: {{ $p->vuelo->fecha_salida }} - {{ $p->vuelo->fecha_llegada }}
                </td>
                <td>
                {{ $p->cliente->nombre}}<br>
                CC: {{ $p->cliente->CC }}  -
                Celular: {{ $p->cliente->celular }}
                </td>
                <td>${{ $p->vuelo->ruta->precio }}</td>
            </tr>
            </tbody>
        </table>
        
        </div>
        <a href="{{ route('factura',$p->id) }}" class="btn btn-success">facturaPDF</a><br>
    </div>
</div>
@stop