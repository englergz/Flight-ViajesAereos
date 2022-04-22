@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        @if($cliente)
        <h1> Confirme sus datos </h1>
        @else
        <h1> Registro de cliente </h1>
        @endif 
        <form  action="{{route('ccliente', [$cc]) }}" method="POST">
            @csrf
            <div class}="col-md-8">
            @if($cliente)
            
                <label for="cc">CC</label>
                <input type="text" id='cc' name='cc' class="form-control" 
                required value="{{$cliente->CC}}"> <br> <br>
            
                <label for="nombre">Nombre</label>
                <input type="text" id='nombre' name='nombre' class="form-control" 
                required value="{{$cliente->nombre }}"> <br> <br>

                <label for="celular">Celular</label>
                <input type="text" id='celular' name='celular' 
                class="form-control" required value="{{$cliente->celular}}"> <br> <br>
            @else
                <label for="cc">CC</label>
                <input type="text" id='cc' name='cc' class="form-control" 
                required value="{{$cc}}"> <br> <br>
            
                <label for="nombre">Nombre</label>
                <input type="text" id='nombre' name='nombre' class="form-control" 
                required> <br> <br>

                <label for="celular">Celular</label>
                <input type="text" id='celular' name='celular' 
                class="form-control" required> <br> <br>
            @endif      
                <button type="submit" class="btn btn-success">registrar</button>
                <a type="submit" class="btn btn-danger" href="{{ URL::previous() }}">Cancelar</a>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
