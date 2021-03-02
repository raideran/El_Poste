<?php
//Esto es para todas las paginas que requieran estar autentificado
session_start();
if(!$_SESSION['autentificado']){
    header('Location:http://localhost/El_poste/index.php');
}

?>