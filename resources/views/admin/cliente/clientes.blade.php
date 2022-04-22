@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h1> Clientes </h1>
        <div align="right">
            <form action ="{{route('buscarCliente')}}" method="POST" >
            @csrf
            <div align="right" class=" col-md-2 input-group mb-3">
                <input type="text" class="form-control" placeholder="Nombre de cliente" aria-label="Username" 
                aria-describedby="basic-addon1" id="nombre" name="nombre" required>
            </div>
                <button type="submit" class=" btn btn-success">Buscar</button>
             </form>
             <br>
             <br>
             
        </div>
        <br>

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

        </div>
    </div>
</div>
@stop