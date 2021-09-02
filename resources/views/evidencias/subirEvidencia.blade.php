
<form action="{{$evidencia->idEvidencia}}" method="post"> 
{{ csrf_field() }}
    <h1>{{$evidencia->nombreEvidencia}}</h1>
    <div>
        <label for="name">Evidencia link</label>
        <input type="text" id="evidenciaAprendiz" name="linkEvidencia" value="">
    </div>
    <div>
        <label for="name">Comentario</label>
        <input type="text" id="idComentarioFK" name="comentario" value="">
    </div>
    <div>
        <button type="submit">Guardar</button>
    </div>
</form>
<!--
 idevidencia_aprendiz	
evidenciaAprendiz	
fechaevidencia	
idFichaFK	
idComentarioFK	
idProyectoFK	
idEvidenciaFK -->