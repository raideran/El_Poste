<?php
include('connect.php');
$consulta="UPDATE eventos SET titulo='$_POST[titulo]',descripcion='$_POST[detalles]',
direccion='$_POST[direccion]',telefono='$_POST[numero]' WHERE idevento='$_POST[id]'" ;
$ejecutar=mysqli_query($conexion,$consulta);
echo "Modificado con exito el evento con id ".$_POST['id']."";
?>  