@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h1> Actualizar Cliente </h1>
        <form  action="{{route('actualizarCliente', $cliente->id) }}" method="POST">
            @csrf
            <div class}="col-md-8">
                <label for="cc">CC</label>
                <input type="text" id='cc' name='cc' class="form-control" 
                required value="{{$cliente->CC}}"> <br> <br>
            
                <label for="nombre">Nombre</label>
                <input type="text" id='nombre' name='nombre' class="form-control" 
                required value="{{$cliente->nombre }}"> <br> <br>

                <label for="celular">Celular</label>
                <input type="text" id='celular' name='celular' 
                class="form-control" required value="{{$cliente->celular}}"> <br> <br>
                    
                <button type="submit" class="btn btn-success"> Actualizar </button>
                <a type="submit" class="btn btn-danger" href="{{route('clientes')}}">Cancelar</a>
            </div>
        </form>
        </div>
    </div>
</div>
@stop