<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mi Poste</title>
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <!------CSS-Propios------>
    <link href="css/EstilosTodos.css" rel="stylesheet" type="text/css">
    <link href="css/Estilos-MiPoste.css" rel="stylesheet" type="text/css">
</head>

<body>
    <?php
        include("php/session.php");
    ?>
    <div class="todo">
        <header class="header">
            <div class="logo">
                <h1><a href="../index.php">El Poste</a></h1>
            </div>
        </header>
        <div class="menu-bar">
            <a href="" class="menu-btn">Menu</a>
        </div>
        <nav class="nav-bar">
            <ul class="menu">
                <li><a href="">Provincia</a>
                    <ul class="submenu">
                        <li><a href="">La Habana</a></li>
                        <li><a href="">Matanzas</a></li>
                        <li><a href="">Cienfuegos</a></li>
                        <li><a href="">Sancti Spiritus</a></li>
                        <li><a href="">Las Tunas</a></li>
                    </ul>
                </li>
                <li><a href="#">Contacto</a></li>
                <li><a href="NuevoPoste.php">Nuevo Poste</a></li>
                <li><a href="">Borrar Poste</a></li>
            </ul>
        </nav>
        <section class="contenido">
                <?php
                    require_once("php/cardsuser.php");
                ?>
                <!--<p>No hay contenido para mostrar ahora</p>-->
        </section>
        <footer class="footer">
            <p>El Poste. All rigths reserved. Copyright 2020&copy;</p>
        </footer>
    </div>
</body>

</html>