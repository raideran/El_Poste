<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Poste</title>
                        <!------CSS------>
    <link href ="css/bootstrap.min.css" rel="stylesheet" type="text/css">
                        <!------CSS-Propios------>
    <link href="css/EstilosTodos.css" rel="stylesheet" type="text/css">
    <link href="css/Estilos-NuevoPoste.css" rel="stylesheet" type="text/css">
    </head>
<body>
    <div class="todo">
        <header class="header">
                <div class="logo">
                <h1><a href="../index.php">El Poste</a></h1>
            </div>
        </header>
            <section class="login">
                
                <?php
                $action="php/nuevoPoste/recibirDatos.php";
                $titulo=null;
                $descripcion=null;
                $direccion=null;
                $imagen=null;
                $contacto=null;
                $usarContacto=null;
                $submit="Crear";
                $tit="Nuevo";
                $id=null;
                $requerido="required";
               if(isset($_POST['modificar']) && $_POST['modificar']==true){
                   include("php/connect.php");
                    $action="php/modificarPoste.php";
                    $submit="Modificar";
                    $tit=$submit;
                    $requerido=null;
                    $consultavistas="SELECT eventos.titulo, 
                                       eventos.descripcion,
                                       eventos.direccion,
                                       eventos.telefono FROM eventos WHERE idevento= '$_POST[id]' ";
                   $consulta=$conexion->query($consultavistas);
                   $id=$_POST['id'];
                while ($lista=$consulta->fetch_row()){
                    $titulo=$lista[0];
                    $descripcion=$lista[1];
                    $direccion=$lista[2];
                    $imagen=null;
                    $contacto=$lista[3];
                    $usarContacto=null;
                 }
                }
                echo '<h3>'.$tit.'</h3><form action="'.$action.'" method="POST" class="crearPoste">
                <label for="titulo">Titulo:</label>
                    <input type="text" id="titulo" name="titulo" class="form-control" value="'.$titulo.'"'.$requerido.'>
                    <label for="detalles">Desripcion:</label>
                    <textarea id="detalles" name="detalles" class="form-control">'.$descripcion.'</textarea>
                    <label for="direccion">Dir:</label>
                    <input type="text" id="direccion" name="direccion" class="form-control" value="'.$direccion.'"'.$requerido.'>
                    <label for="foto">Agregue una imagen</label>
                    <input type="file" name="foto" id="foto" value="'.$imagen.'"'.$requerido.'>
                    <label for="numero" class="contacto">Contacto</label>
                    <input type="tel" name="numero" id="numero" class="form-control" value="'.$contacto.'">
                    <input type="checkbox" id="contacto" value="true" name="contacto" class="check form-control"'.$usarContacto.'">
                    <label for="contacto" class="usar">Usar mi numero personal para contactarme</label>
                    <input type="hidden" name="id" value="'.$id.'">
                    <button type="submit" class="btn btn-outline-dark">'.$submit.'</button>
                    <a href = "Poste.php"><button type="button" class="btn btn-danger border-dark">X</button></a>
                </form>';
                ?>
            </section>
        <footer class="footer">
            <p>El Poste. All rigths reserved. Copyright 2020&copy;</p>
        </footer>
    </div>
</body>
</html>