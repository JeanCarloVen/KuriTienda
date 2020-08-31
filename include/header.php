<?php require_once '../include/conexion.php' ?>
<!DOCTYPE html>
<html lang="es"> 
<head>
    <title>TIENDA KURI</title>
    <!--<link rel="stylesheet" href="./css/master.css"/>-->

    <link rel="stylesheet" href="../principal/style.css">
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
    <!--Encabezado-->
    <div class="topnav"> <!--Barra gris-->
    <div class="nav"> <!--desplegable-->
        <ul>
            <li><a id="float">Menu</a>
            <ul>
                <li><a href="">Departamentos</a>
                    <ul>
                        <li>
                            <li><a href="departamentos/pelis.php">Películas</a></li>
                            <li><a href="departamentos/libros.php">Libros</a></li>
                            <li><a href="departamentos/mano.php">Hecho a mano</a></li>
                        </li>
                    </ul>
                </li>
            </ul>
            </li>
        </ul>
    </div>
    
    <?php if(isset($_SESSION['usuario'])) : ?>
        <a href="../include/close.php" id="float">Cerrar Sesión</a>
        <a href="#perfil" id="float">Mi perfil</a>
    <?php else: ?>
        <a href="../principal/RegistroUsuarios.php" id="float">Registrarse</a>
        <a href="../principal/login.php" id="float">Iniciar Sesión</a>
    <?php endif; ?> 

        <div class="search-container">
            <form action="/action_page.php">
              <input type="text" placeholder="Search.." name="search">
              <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</head>

