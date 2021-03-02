<?php
    include("../connect.php");

    //verificamos si esta autenticado
    header('Location: http://localhost/El_Poste/resources/php/session.php');
    //guardamos la info en la base de datos
    if(mysqli_connect_errno()){
        //si hay fallos al conectarse con la base de datos
        // entonces que vuelva a la pagina principal
        //echo "Fallo al conectarse con la base de datos";
        header("Location: http://localhost/El_Poste/index.php?errorConexionDb=si");
    }
    mysqli_set_charset($conexion,"utf8");
    //revisamos si el evento existe para no repetirlo
    include("revisarEventoRepetido.php");
    if(verificarRepetidos($_SESSION['iduser'],$_POST['titulo'],$_POST['detalles'],$_POST['direccion'],$_POST['numero'])){
        //significa que esta repetido asi q regresa a la pag de crear poste y le colocamos los campos vacios
        header("Location: ../../NuevoPoste.php?posteRepetido=si");
    }
    //obtenemos el id del usuario para agregar al poster
    $consultaId="SELECT id FROM elposter.users";
    $idUsuario=mysqli_query($conexion,$consultaId);
    /*$imprimir=mysqli_fetch_row($idUsuario);
    echo "$imprimir[0]";*/
    $idUsuarioguardar=mysqli_fetch_assoc($idUsuario);
    $fecha=getdate();
    //echo "<script>alert('$fecha[mday]/$fecha[mon]/$fecha[year] --- $fecha[hours]/$fecha[minutes]/$fecha[seconds]')</script>";
    //insertamos los datos en la tabla eventos
    $consulta="INSERT INTO elposter.eventos(idevento,iduser,titulo,descripcion,
    direccion,fecha,hora,email,telefono) VALUES ('','$idUsuarioguardar[id]','$_POST[titulo]','$_POST[detalles]',
    '$_POST[direccion]','','','','$_POST[numero]')";
    $resultado=mysqli_query($conexion,$consulta);
    //seleccionamos el id del poster para guardarlo en la tabla imagenes
    $consultaIdimgposter="SELECT idevento FROM eventos WHERE titulo='$_POST[titulo]' AND descripcion='$_POST[detalles]' AND direccion='$_POST[direccion]'";
    $idimgposter=mysqli_query($conexion,$consultaIdimgposter);
    $idimgposterguardar=mysqli_fetch_assoc($idimgposter);
    $idsize=mysqli_num_rows($idimgposter);
    $consultaImg="INSERT INTO elposter.imagenes(idimagenes,imagen,idimgposter) VALUES ('','$_POST[foto]','$idimgposterguardar[idevento]')";
    //guardamos la imagen en la tabla imagenes
    $resultadoImg=mysqli_query($conexion,$consultaImg);
    mysqli_close($conexion);
    //vamos a la pagina de MiPoste
    header("Location: http://localhost/El_Poste/resources/MiPoste.php");
?>