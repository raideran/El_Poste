<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Poste</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/EstilosTodos.css">
    <link rel="stylesheet" href="css/estilos-infoPoste.css">
</head>
<body>
    <div class="todo">
        <header class="header" id = "header">
                <div class="logo">
                    <h1><a href="../index.php">El Poste</a></h1>
                </div>
        </header>
        <section class="container-fluid poste" id = "poste">
        <?php
            include("php/session.php");
            include('php/connect.php');
            $a= "SELECT * FROM eventos WHERE idevento='$_POST[id]'";
            $consulta=mysqli_query($conexion,$a);
            while($arr=mysqli_fetch_array($consulta,MYSQLI_ASSOC)){
                echo '<div class="row justify-content-center">
                            <div class = "col d-none d-md-block"></div>
                            <div class = "col-12 col-md-auto">
                                <h1>'.$arr['titulo'].'</h1>
                            </div>
                            <div class = "col d-none d-md-block"></div>
                      </div>';
                echo '<div class = "row">
                            <div class="col-md-4">
                                <img src = "imageSources/3f7c1901279b7dfaed2daac6ce8c66e6.jpg"
                                     alt = "imagen de anuncio" class = "rounded img-fluid">
                            </div>
                            <div class = "col-md-8">
                                <p>
                                Las imágenes vienen en todos los tamaños. También lo hacen las pantallas. Las imágenes
                                responsivas se ajustan automáticamente para adaptarse al tamaño de la pantalla.
                                Cree imágenes responsivas agregando una clase .img-fluid a la etiqueta <img> . La imagen se
                                escalará muy bien al elemento principal.
                                La clase .img-fluid aplica max-width: 100%; y height: auto; a la imagen:
                                On July 26, 1956, the Moncada barracks was assaulted. This action was led by the young people called Centennial Generation. 
                                many of whom later integrated the July 26 movement in honor of this event.
                                As a military action it was a failure, but it had a great importance because it motivated the masses to face the Batista 
                                tyranny and marked a new stage in the history of Cuba.
                                Later they were capturing the different groups of dispersed assailants, 
                                tortured and murdered many of them, the rest were taken to trial. 
                                This was carried out in October of that year, here the integrity of the fighters of this action was revealed, 
                                especially one of them, their leader, the person who explained in his self-defense allegation 
                                that the intellectual author of the assault was José Martí, that was Fidel Castro.

                                </p>
                            </div>
                      </div>';
                if($_SESSION['iduser']==$arr['iduser']){
                    echo   '<form action="NuevoPoste.php" method="POST" class = "row">
                                <input type="hidden" name="id" value="'.$_POST['id'].'">
                                <input type="hidden" name="modificar" value="true">
                                <div class = "col">
                                    <input type="submit" class="btn btn-outline-dark" value="Modificar">
                                </div>
                            </form>';
                }
            }
        ?>
        </section>
        <footer class="footer" id = "footer">
            <p>El Poste. All rigths reserved. Copyright 2020&copy;</p>
        </footer>
    </div>

</body>

</html>