<?php
//Esto es para el formulario de registro
include ("connect.php");
//Insertar nuevo usuario a la BD
mysqli_query($conexion,"INSERT INTO users(id,admin,user,password,email,tel,img) VALUES ('','','$_POST[user]','$_POST[password]','$_POST[email]','$_POST[telefono]','')" );
//Cerrar la conexion con la BD como buena practica de programacion
mysqli_close($conexion);
//Redireccionando la pagina para que inicies sesion con tu usuario y contrasena
header('Location: http://localhost/El_Poste/resources/php/entrar.php');
?>