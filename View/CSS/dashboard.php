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
    <title>Gestión de Proyectos</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/View/CSS/styles.css">
</head>
<body>
    <!-- Barra de navegación -->
    <?php include("navbar.php");?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Gestión de Proyectos</h5>
                        <!-- Menú lateral con enlaces de navegación -->
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#">Inicio</a> <!-- Página de inicio -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="proyectos.php">Proyectos</a> <!-- Proyectos -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tareas.php">Tareas</a> <!-- Tareas -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <h3>Proyectos</h3>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Total de proyectos: 3</h5>
                        <!-- Tabla que muestra la lista de proyectos -->
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Proyecto</th>
                                    <th>Tareas</th>
                                    <th>Fecha</th>
                                    <th>Estado</th>
                                    <th>Comentario</th>
                                </tr>
                            </thead>
                            <tbody>
                                
                                <tr>
                                    <td>1</td>
                                    <td><a href="tareas.php?proyecto_id=1">Proyecto 1</a></td>
                                    <td>5</td>
                                    <td>2024-12-31</td>
                                    <td><span class="badge badge-success">Listo</span></td>
                                    <td>Comentario</td>
                                </tr>
                                
                                <tr>
                                    <td>2</td>
                                    <td><a href="tareas.php?proyecto_id=2">Proyecto 2</a></td>
                                    <td>3</td>
                                    <td>2024-06-15</td>
                                    <td><span class="badge badge-warning">Medio</span></td>
                                    <td>Comentario</td>
                                </tr>
                                <tr>
                                    <td>3</td>
                                    <td><a href="tareas.php?proyecto_id=3">Proyecto 3</a></td>
                                    <td>7</td>
                                    <td>2025-03-20</td>
                                    <td><span class="badge badge-danger">Tarde</span></td>
                                    <td>Comentario</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!-- Paginación -->
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-end mt-3">
                        <li class="page-item disabled">
                            <a class="page-link" href="#" tabindex="-1">Anterior</a> <!-- Enlace a la página anterior -->
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li> <!-- Enlaces a las páginas -->
                        <li class="page-item">
                            <a class="page-link" href="#">Siguiente</a> <!-- Enlace a la página siguiente -->
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>