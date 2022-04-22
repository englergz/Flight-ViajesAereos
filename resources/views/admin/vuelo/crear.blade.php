@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
        <h1> Registro de Vuelos </h1>
        <form  action="{{ url('vuelos/registro') }}" method="POST">
            @csrf
            <div class}="col-md-8">
                <label for="ruta">Ruta</label>
                <select class="form-control" required name='ruta' id="ruta" onchange='this.form.()'>
                    <option value="">Selecciona una ruta...</option>
                    @foreach ($rutas as $r)
                    <option value="{{$r->id}}">
                    {{ $r->origen_descripcion }} ({{ $r->origen }}) - {{ $r->destino_descripcion }} ({{ $r->destino }})
                    </option>
                    @endforeach
                </select> <br> <br>
            
                <label for="salida">Salida</label>
                <input type="date" id='salida' name='salida' class="form-control date" 
                required > <br> <br>

                <label for="llegada">Llegada</label>
                <input type="date" id='llegada' name='llegada' 
                class="form-control date" required > <br> <br>
                    
                <button type="submit" class="btn btn-success"> Registrar </button>
                <a type="submit" class="btn btn-danger" href="{{route('vuelos')}}">Cancelar</a>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
