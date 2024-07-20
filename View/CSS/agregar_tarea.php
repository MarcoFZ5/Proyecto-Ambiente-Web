
<form id="formAgregarTarea">
    <div class="form-group">
        <label for="tareaNombre">Nombre de la tarea</label>
        <input type="text" class="form-control" id="tareaNombre" placeholder="Nombre de la tarea">
    </div>
    <div class="form-group">
        <label for="tareaDescripcion">Descripción</label>
        <textarea class="form-control" id="tareaDescripcion" rows="3" placeholder="Descripción de la tarea"></textarea>
    </div>
    <div class="form-group">
        <label for="tareaFechaInicio">Fecha de inicio</label>
        <input type="date" class="form-control" id="tareaFechaInicio">
    </div>
    <div class="form-group">
        <label for="tareaFechaFin">Fecha de finalización</label>
        <input type="date" class="form-control" id="tareaFechaFin">
    </div>
    <div class="form-group">
        <label for="tareaEstado">Estado</label>
        <select class="form-control" id="tareaEstado">
            <option>En progreso</option>
            <option>Listo</option>
            <option>Pendiente</option>
        </select>
    </div>
    <div class="form-group">
        <label for="tareaComentario">Comentario</label>
        <textarea class="form-control" id="tareaComentario" rows="2" placeholder="Comentario"></textarea>
    </div>
</form>
