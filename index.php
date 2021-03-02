<!DOCTYPE html>
<html>

<head>
    <title>El Poste</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!------CSS------>
    <link href="resources/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="resources/css/EstilosTodos.css" rel="stylesheet" type="text/css">
    <link href="resources/css/Estilos-index.css" rel="stylesheet" type="text/css">
    <link href="resources/css/media-index.css" rel="stylesheet" type="text/css" />
    <!-- PHP -->
    <?php
            error_reporting("E^ALL E^WARNING E^NOTICE");
            if(isset($_GET["errorConexionDb"])=="si"){
                echo "<script>alert('Ocurrio un error inesperado');</script>";
            }
    ?>
</head>

<body>
    <div class="todo">
        <header class="header">
            <div class="logo">
                <h1><a href="index.php">El Poste</a></h1>
            </div>
        </header>
        <div class="menu-bar">
            <a href="#" class="menu-btn">Menu</a>
            <!--button type="button" class="menu-btn" id="menu-btn">Menu</button-->
        </div>
        <nav class="nav-bar" id="nav-bar">
            <ul class="menu1">
                <li class="menu-container">
                    <a href="#">
                        <img src="resources/icon/home-1.png" alt="home-icon" class="home-icon">
                        <p class="link-p">Inicio</p>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="resources/LoginPage.php">
                                <img src="resources/icon/user-1.png" alt="user" class="home-icon">
                                <p class="link-p">Entrar</p>
                            </a>
                        </li>
                        <li>
                            <a href="resources/CuestionarioRegistro.php">
                                <img src="resources/icon/Register-1.png" alt="Register" class="home-icon">
                                <p class="link-p">Registrarse</p>
                            </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="resources/MiPoste.php">
                        <img src="resources/icon/Poste-1.png" alt="Poste" class="home-icon">
                        <p class="link-p">Poste</p>
                    </a>
                </li>
                <li class="menu-container">
                    <a href="#">
                        <img src="resources/icon/Position-1.png" alt="position" class="home-icon">
                        <p class="link-p">Provincia</p>
                    </a>
                    <ul class="submenu">
                        <li><a href="">La Habana</a></li>
                        <li><a href="">Matanzas</a></li>
                        <li><a href="">Cienfuegos</a></li>
                        <li><a href="">Sancti Spiritus</a></li>
                        <li><a href="">Las Tunas</a></li>
                        <li><a href="">provincia 1</a></li>
                        <li><a href="">provincia 2</a></li>
                        <li><a href="">provincia 3</a></li>
                        <li><a href="">provincia 4</a></li>
                        <li><a href="">provincia 5</a></li>
                        <li><a href="">provincia 6</a></li>
                        <li><a href="">provincia 7</a></li>
                        <li><a href="">provincia 8</a></li>
                        <li><a href="">provincia 9</a></li>
                        <li><a href="">provincia 10</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="menu2">
                <li>
                    <a href="#">
                        <img src="resources/icon/About-us-1.png" alt="about" class="home-icon">
                        <p class="link-p">Acerca De</p>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <img src="resources/icon/Contact-2.png" alt="contact" class="home-icon">
                        <p class="link-p">Contacto</p>
                    </a>
                </li>
            </ul>
        </nav>

        <?php
            require_once("resources/php/card.php");
        ?>
        <footer class="footer">
            <p>El Poste. All rigths reserved. Copyrigth 2020&copy;</p>
        </footer>
    </div>

    <!------JS------>
    <script src="resources/js/jQuery/jquery.js" type="text/javascript"></script>
    <script src="resources/js/jQuery/jquery-ui.js" type="text/javascript"></script>
    <script src="resources/js/main-index.js" type="text/javascript"></script>
</body>

</html>