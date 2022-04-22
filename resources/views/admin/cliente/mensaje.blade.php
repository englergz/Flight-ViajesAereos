@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h1> Busqueda de Clientes: "{{$cliente}}"</h1>
        <br>
        
        <h4> No hay resultados...</h4>
      
        <a href="{{ route('clientes') }}" class="btn btn-success">Regresar</a>
        </div>
    </div>
</div>
@stop