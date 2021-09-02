<table class="table table-stripedd table-hover"> 
    <h1>{{ $nombreFicha->ficha }} </h1>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Fase</th>
            <th>Fecha Inicio</th>
            <th>Fecha Fin</th>
            <th>Estado</th>
        </tr>
    </thead>
    <tbody>
    
        <tr>
            <td>{{ $evidencia->nombreEvidencia }}</td>
            <td>{{ $evidencia->faseEvidencia }}</td>
            <td>{{ $evidencia->fechaInicio }}</td>
            <td>{{ $evidencia->fechaFin }}</td>
           
            <td>
                <a href="{{ url('/evidencias/subir/'.$evidencia->idEvidencia) }}"> Subir </a>
            </td>
        </tr>
    </tbody>
</table>