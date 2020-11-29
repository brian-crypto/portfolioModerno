<?php $pg ="Sobre-mi"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sobre mi</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
</head>

<body>
    <header>
    <?php

include_once("menu.php");

    ?>
    </header>
    <section id="sobremi">
        <div class="container">
            <div class="row py-sm-5">
                <div class="col-sm-6 col-12 order-2 order-sm-1">
                    <h1>Sobre mí</h1>
                    <p>Soy un estudiante de programación Full Stack con la Fundación Pescar. Graduado del Curso Programación Web Full Stack con DePCSuite Tengo 19 años y mi pasión por la 
                    programación es temprana, aunque durante toda mi vida estuve involucrado en el diseño y creacion de 
                    videos e imagenes con diferentes programas de edición. 
                    </p>
                    <a href="cvBrianFlores.pdf" class="btn" title="CV" download="CV Brian Tomas Flores">Descargar CV</a>

                </div>
                <div class="col-sm-6 col-12 order-1 order-sm-2 py-12">
                    <img src="images/fotocv.jpg" class="rounded-circle" title="Foto de CV" alt="Foto de Curriculm"
                        width="400" height="450">



                </div>

            </div>

        </div>

    </section>

    <section class="habilidades">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-6">
                    <div class="habilidadesCard">
                        <i class="fas fa-code"></i>
                        <h3>Lenguajes de programación</h2>
                            <p>PHP, Lavarel, HTML, CSS, Bootstrap.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="habilidadesCard">
                    <i class="fas fa-database"></i>
                        <h3>Base de datos</h2>
                            <p>MySQL/MariaDB.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="habilidadesCard">
                    <i class="fas fa-language"></i>
                        <h3>Idiomas</h2>
                            <p>Español: nativo<br>
                            Ingles: nivel bajo<br>
                            Frances: nivel medio.</p>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="habilidadesCard">
                    <i class="fas fa-dumbbell"></i>
                        <h3>Hobbies</h2>
                            <p>TaeKwonDo<br>
                            Kick-Boxing<br>
                            Full Contact
                            </p>
                    </div>
                </div>

            </div>

        </div>


    </section>

    <?php
            include_once("footer.php");
            ?>



    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>