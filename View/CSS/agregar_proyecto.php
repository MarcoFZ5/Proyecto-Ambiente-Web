
<form>
    <div class="form-group">
        <label for="nombreProyecto">Nombre del Proyecto</label>
        <input type="text" class="form-control" id="nombreProyecto" placeholder="Ingrese el nombre del proyecto">
    </div>
    <div class="form-group">
        <label for="descripcionProyecto">Descripción</label>
        <textarea class="form-control" id="descripcionProyecto" rows="3" placeholder="Ingrese una descripción del proyecto"></textarea>
    </div>
    <div class="form-group">
        <label for="fechaInicio">Fecha de Inicio</label>
        <input type="date" class="form-control" id="fechaInicio">
    </div>
    <div class="form-group">
        <label for="fechaFin">Fecha de Finalización</label>
        <input type="date" class="form-control" id="fechaFin">
    </div>
    <div class="form-group">
        <label for="estadoProyecto">Estado</label>
        <select class="form-control" id="estadoProyecto">
            <option>En progreso</option>
            <option>Listo</option>
            <option>Pendiente</option>
        </select>
    </div>
    <button type="submit" class="btn btn-primary">Guardar Proyecto</button>
</form>
