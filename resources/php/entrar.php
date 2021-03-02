<?php
// Esto es para el formulario de iniciar session
include ("connect.php");
$consulta = mysqli_query($conexion,"SELECT * FROM users WHERE user = '$_POST[user]' AND password = '$_POST[password]'");
if(!$consulta){//Para evitar que se ejecute el resto del codigo en caso de error
    echo "El ususario o contraseña son incorrectos.<br><br>";
        echo mysqli_error($mysqli);
        exit;
    }
$cons=mysqli_query($conexion,"SELECT users.id FROM users WHERE user = '$_POST[user]' AND password = '$_POST[password]'");
if($user = mysqli_fetch_assoc($consulta)){//Verificando que el usuario se encuentre en la consulta
    session_start();
    $_SESSION["autentificado"]=true;
    while($arr= mysqli_fetch_array($cons,MYSQLI_ASSOC)){
    /* Esta variable de session es para no tener que buscar el id del usuario
    cada vez que se necesite utilizar*/
    $_SESSION['iduser']=$arr['id'];
    }
    header('Location:../../index.php');
}
else {
    header('Location:../LoginPage.php?error=si');
}
// 5 - Cerrar la conexion con la BD como buena practica de programacion
mysqli_close($conexion) or die("error al cerrar la conexion");
/*echo "Conexion cerrada con exito";*/
?>
