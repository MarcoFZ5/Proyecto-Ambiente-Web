<?php
session_start();

if (is_null($_SESSION['username'])) {
    header('Location: /View/CSS/home.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestión de Proyectos - Tareas</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <!-- Barra de navegación -->
    <?php include('navbar.php'); ?>

    <div class="container mt-5">
        <h3 class="mb-4">Tareas del Proyecto 1</h3>
        <!-- Botón para abrir el modal de agregar tarea -->
        <button type="button" class="btn btn-primary mb-4" data-toggle="modal" data-target="#agregarTareaModal">+ Agregar nueva tarea</button>

        <div class="card card-custom mb-4">
            <div class="card-header card-custom-header">
                Total de tareas: 3
            </div>
            <div class="card-body">
                <!-- Lista de tareas del proyecto -->
                <table class="table table-hover">
                    <thead class="thead-light">
                        <tr>
                            <th>#</th>
                            <th>Tarea</th>
                            <th>Descripción</th>
                            <th>Fecha de inicio</th>
                            <th>Fecha de finalización</th>
                            <th>Estado</th>
                            <th>Comentario</th>
                            <th>Acciones</th> <!-- Columna para acciones -->
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Tarea 1</td>
                            <td>Descripción de la tarea 1</td>
                            <td>2024-01-01</td>
                            <td>2024-01-31</td>
                            <td><span class="badge badge-success badge-status">Listo</span></td>
                            <td>Comentario</td>
                            <td>
                                <!-- Botones para editar y eliminar la tarea -->
                                <button class="btn btn-sm btn-info" onclick="window.location.href='editar_tarea.php?tarea_id=1'">Editar</button>
                                <button class="btn btn-sm btn-danger" onclick="if(confirm('¿Estás seguro de que deseas eliminar esta tarea?')) window.location.href='eliminar_tarea.php?tarea_id=1'">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Tarea 2</td>
                            <td>Descripción de la tarea 2</td>
                            <td>2024-02-01</td>
                            <td>2024-02-28</td>
                            <td><span class="badge badge-warning badge-status">En progreso</span></td>
                            <td>Comentario</td>
                            <td>
                                <button class="btn btn-sm btn-info" onclick="window.location.href='editar_tarea.php?tarea_id=2'">Editar</button>
                                <button class="btn btn-sm btn-danger" onclick="if(confirm('¿Estás seguro de que deseas eliminar esta tarea?')) window.location.href='eliminar_tarea.php?tarea_id=2'">Eliminar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Tarea 3</td>
                            <td>Descripción de la tarea 3</td>
                            <td>2024-03-01</td>
                            <td>2024-03-31</td>
                            <td><span class="badge badge-danger badge-status">Pendiente</span></td>
                            <td>Comentario</td>
                            <td>
                                <button class="btn btn-sm btn-info" onclick="window.location.href='editar_tarea.php?tarea_id=3'">Editar</button>
                                <button class="btn btn-sm btn-danger" onclick="if(confirm('¿Estás seguro de que deseas eliminar esta tarea?')) window.location.href='eliminar_tarea.php?tarea_id=3'">Eliminar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <!-- Paginación -->
        <nav aria-label="Page navigation example">
            <ul class="pagination justify-content-end mt-4">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Anterior</a>
                </li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Siguiente</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Agregar nueva tarea -->
    <div class="modal fade" id="agregarTareaModal" tabindex="-1" role="dialog" aria-labelledby="agregarTareaModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="agregarTareaModalLabel">Agregar Nueva Tarea</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <!-- Formulario -->
                    <?php include('agregar_tarea.php'); ?>
                        </div>
                        <div class="form-group">
                            <label for="tareaComentario">Comentario</label>
                            <textarea class="form-control" id="tareaComentario" rows="2" placeholder="Comentario sobre la tarea"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Guardar tarea</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
