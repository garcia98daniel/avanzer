
<table class="table table-stripedd table-hover"> 
    <h1>Evidencias de la ficha</h1>
    <thead>
        <tr>
            <th>Trimestre</th>
            <th>Nombre</th>
            <th>Fase</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Link Evidencia</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
    
    @foreach ($result as $evidencia)
        <tr>
            <td>{{ $evidencia->trimestre }}</td>
            <td>{{ $evidencia->nombreEvidencia }}</td>
            <td>{{ $evidencia->faseEvidencia }}</td>
            <td>{{ $evidencia->fechaInicio }}</td>
            <td>{{ $evidencia->fechaFin }}</td>
            <td>{{ $evidencia->evidenciaP }}</td>
            <td>
                <a href="{{ url('/instructor/evidencias/activar/'.$evidencia->idEvidencia) }}"> Activar </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
