@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <section class="content">
            @if (session()->has('flash'))
                <div class="alert alert-success">{{ session('flash') }}</div>
            @endif
        </section>
        <h1> Comprar pasaje </h1>
        <form  action="{{ url('pasajes/comprar') }}" method="POST">
            @csrf
            <div class}="col-md-8">
                <label for="vuelo">
                <input type="hidden" id='vuelo' name='vuelo' 
                class="" required value="{{ $vuelo->id}}">
                Vuelo: {{ $vuelo->ruta->origen_descripcion }}({{ $vuelo->ruta->origen }}) - {{ $vuelo->ruta->destino_descripcion }} ({{ $vuelo->ruta->destino }})
                <br>
                Fecha: {{ $vuelo->fecha_salida }} - {{ $vuelo->fecha_llegada }}
                <br>
                Precio: $ {{ $vuelo->ruta->precio }},00
                </label>  <br> <br>
             
                <label for="cliente">CC de cliente</label>
                <input type="text" id='cliente' name='cliente' class="form-control" 
                required > <br> <br>
                
                <button type="submit" class="btn btn-success"> Continuar </button>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
