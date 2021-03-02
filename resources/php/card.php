<?php
include('connect.php');
$CantidadMostrar=9;
$compag = (int)(!isset($_GET['pag'])) ? 1 : $_GET['pag'];
	$TotalReg = $conexion->query("SELECT * FROM eventos");
	//Se divide la cantidad de registro de la BD con la cantidad a mostrar
	$TotalRegistro  =ceil($TotalReg->num_rows/$CantidadMostrar);
	//Consulta SQL
    $consultavistas ="SELECT
						eventos.idevento,
                        eventos.titulo,
                        eventos.direccion
						FROM
						eventos
						ORDER BY
						eventos.idevento ASC
						LIMIT ".(($compag-1)*$CantidadMostrar)." , ".$CantidadMostrar;
                       // echo $consultavistas;
    $consulta=$conexion->query($consultavistas);
    echo'<section class="posters">';
    while ($lista=$consulta->fetch_row()) {
        echo '<div class="card">
        <img src="resources/ImageSources/0d50763575b69b3cbccb7bd3325fd706.jpg" alt="Imagen no disponible" class="card-img-top">
        <div class="card-body">
            <h4 class="card-title">'.$lista[1].'</h4>
            <div class="opciones">
                <p>Lugar: '.$lista[2].'</p>
                <form action="resources/Poste.php" method="POST">
                    <input type="hidden" name="id" value="'.$lista[0].'">
                    <input type="submit" class="btn btn-outline-dark" type="button" value="Leer mas">
                </form>
            </div>
        </div>
    </div>';
    }
    echo '</section>';
    echo "<br><br>";
    /*Sector de Paginacion */

    //Operacion matematica para boton siguiente y atras
	$IncrimentNum =(($compag +1)<=$TotalRegistro)?($compag +1):1;
    $DecrementNum =(($compag -1))<1?1:($compag -1);

    echo "<ul class=\"pagination align-self-center\"><li class=\"page-item\"><a class=\"page-link\" href=\"?pag=".$DecrementNum."\">◀</a></li>";
  //Se resta y suma con el numero de pag actual con el cantidad de
  //numeros  a mostrar
    $Desde=$compag-(ceil($CantidadMostrar/2)-1);
    $Hasta=$compag+(ceil($CantidadMostrar/2)-1);

   //Se valida
    $Desde=($Desde<1)?1: $Desde;
    $Hasta=($Hasta<$CantidadMostrar)?$CantidadMostrar:$Hasta;
   //Se muestra los numeros de paginas
    for($i=$Desde; $i<=$Hasta;$i++){
       //Se valida la paginacion total
       //de registros
        if($i<=$TotalRegistro){
           //Validamos la pag activo
            if($i==$compag){
                echo "<li class=\"page-item active\"><a class=\"page-link\" href=\"?pag=".$i."\">".$i."</a></li>";
            }else {
                echo "<li class=\"page-item\"><a class=\"page-link\" href=\"?pag=".$i."\">".$i."</a></li>";
            }
        }
    }
    echo "<li class=\"page-item\"><a class=\"page-link\" href=\"?pag=".$IncrimentNum."\">▶</a></li></ul>";

?>