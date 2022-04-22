<h1>Agencia FLIGHT. Ltda.</h1>
                 
<div class="container" >
    <div class="row justify-content-center">
        <div class="col-md-12">
        <h4 align="center" >Pasaje</h4>
        
        <br>

        <table class="table" border=0.1 align="center">
            <thead>
                <tr>
                    <th scope="col">Vuelo</th>
                    <th scope="col">Fecha</th>
                    <th scope="col">Cliente </th>
                    <th scope="col">Precio </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                <td>
                De: {{ $p->vuelo->ruta->origen_descripcion}} ({{ $p->vuelo->ruta->origen }})<br>
                Para: {{ $p->vuelo->ruta->destino_descripcion }} ({{ $p->vuelo->ruta->destino }})<br>
                </td>
                <td>
                Salida: {{ $p->vuelo->fecha_salida }} <br> Llegada: {{ $p->vuelo->fecha_llegada }}
                </td>
                <td>
                {{ $p->cliente->nombre}}<br>
                CC: {{ $p->cliente->CC }}<br>
                Celular: {{ $p->cliente->celular }}
                </td>
                <td>{{ $p->vuelo->ruta->precio  }}</td>
            </tr>
            </tbody>
        </table>

        </div>
    </div>
</div>