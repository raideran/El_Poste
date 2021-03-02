<?php
    include("../connect.php");

    function verificarRepetidos($iduser,$titulo,$descripcion,$direccion,$numero){
        //buscamos los eventos en la tabla eventos
        $consulta="SELECT * FROM eventos WHERE $_SESSION[iduser]=$iduser";
        $ejecutarConsulta=mysqli_query($conexion,$consulta);
        while($resultadosConsulta=mysqli_fetch_assoc($ejecutarConsulta)){
            //comprobamos si existe un poste con esos valores
            if($resultadosConsulta["titulo"]==$titulo && $resultadosConsulta["descripcion"]==$descripcion
            && $resultadosConsulta["direccion"]==$direccion && $resultadosConsulta["numero"]==$numero){
                return true;
            }
        }
        return false;
    }

?>