<?php
//Para cerrar session
session_start();
session_destroy();
//Redireccionando a la pagina principal al cerrar la sesion
header('Location: http://localhost/El_poste/resources/LoginPage.php');


?>