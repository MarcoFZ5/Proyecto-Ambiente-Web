<?php
// Obtener el nombre actual del archivo para que se ponga en blanco en el navbar.
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="dashboard.php">Master Plan</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item <?php if ($current_page == 'dashboard.php') echo 'active'; ?>">
                <a class="nav-link" href="dashboard.php">Inicio</a>
            </li>
            <li class="nav-item <?php if ($current_page == 'proyectos.php') echo 'active'; ?>">
                <a class="nav-link" href="proyectos.php">Proyectos</a>
            </li>
            <li class="nav-item <?php if ($current_page == 'tareas.php') echo 'active'; ?>">
                <a class="nav-link" href="tareas.php">Tareas</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item <?php if ($current_page == 'usuario.php') echo 'active'; ?>">
                <a class="nav-link" href="usuario.php">Usuario</a>
            </li>
        </ul>
    </div>
</nav>
