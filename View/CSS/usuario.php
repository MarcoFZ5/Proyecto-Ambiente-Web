<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de Usuario</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <!-- Navegación -->
    <?php include("navbar.php");?>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Menú</h5>
                        <!-- Menú lateral con enlaces -->
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="dashboard.php">Inicio</a> <!-- Dashboard -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="proyectos.php">Proyectos</a> <!-- Proyectos -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="tareas.php">Tareas</a> <!-- Tareas -->
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="perfil.php">Perfil</a> <!-- Usuario -->
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <h3>Perfil de Usuario</h3>
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Información del Usuario</h5>
                        <p><strong>Nombre:</strong> Juan Pérez</p> <!-- Nombre  -->
                        <p><strong>Email:</strong> juan.perez@example.com</p> <!-- Email -->
                        <p><strong>Rol:</strong> Administrador</p> <!-- Rol -->
                        <p><strong>Último acceso:</strong> 2024-07-19</p> <!-- Fecha del último acceso -->
                        <a href="editar_perfil.php" class="btn btn-primary">Editar Perfil</a> <!-- Editar perfil del usuario -->
                    </div>
                </div>
                <div class="card mt-4">
                    <div class="card-body">
                        <h5 class="card-title">Opciones adicionales</h5>

                        <ul>
                            <li><a href="cambiar_contrasena.php">Cambiar contraseña</a></li> <!-- Cambiar la contraseña -->
                            <li><a href="cerrar_sesion.php">Cerrar sesión</a></li> <!-- Cerrar sesión -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
