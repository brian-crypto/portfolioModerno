<?php $pg ="Proyecto"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Proyectos</title>
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
    <section id="Proyectos" class="mb-5" >
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1><b>Mis Proyectos</b></h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <h2>Esto son algunos de los trabajos que he realizado:</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-12 pl-sm-4">
                    <div class="bg-white">
                        <img src="images/abmventas.png" alt="AMB Ventas" title="AMB Ventas" class="img-fluid">
                        <div class="row">
                            <div class="col-12">
                                <h3>Registro de Clientes</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p>
                                    Sistema de gestión de clientes. Realizado en HTML, CSS, PHP y
                                    Bootrap.
                                </p>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <a href="Tarea/index.php" class="btn" target="_blank">Ver
                                    online</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="https://github.com" target="_blank" class="codigo">Código fuente</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-12 pl-sm-4">
                    <div class="bg-white">
                        <img src="images/koyaweb.PNG" alt="Koya Web" title="Sistema" class="img-fluid">
                        <div class="row">
                            <div class="col-12">
                                <h3>Blog de Koya Web</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p>
                                    Pagina informativa de un canal de Youtube hecho con HTML y CSS(Flexbox).
                                </p>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6 col-sm-4 pl-3 mt-4 mt-sm-0">
                                <a href="Inicio/index.html" class="btn" target="_blank">Ver
                                    online</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="https://github.com" target="_blank" class="codigo">Código fuente</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-12 pl-sm-4">
                    <div class="bg-white">
                        <img src="images/portRocket.PNG" alt="Portfolio" title="Portfolio" class="img-fluid">
                        <div class="row">
                            <div class="col-12">
                                <h3>Portfolio</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p>
                                    Trabajo final hecho con Rocket Code.
                                </p>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <a href="Proyecto/index.html" class="btn" target="_blank">Ver
                                    online</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="https://github.com" target="_blank" class="codigo">Código fuente</a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6 col-12 pl-sm-4">
                    <div class="bg-white">
                        <img src="images/videoFondo.PNG" alt="Sitio Web" title="Sitio Web" class="img-fluid">
                        <div class="row">
                            <div class="col-12">
                                <h3>Sitio web con vídeo de fondo</h3>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <p>
                                    Sitio Web realizado con HTML y CSS.
                                </p>
                            </div>
                        </div>
                        <div class="row p-3">
                            <div class="col-6">
                                <a href="videoFondo/index.html" class="btn" target="_blank">Ver
                                    online</a>
                            </div>
                            <div class="col-6 text-right">
                                <a href="https://github.com" target="_blank" class="codigo">Código fuente</a>
                            </div>
                        </div>

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
<!--Menu de navegacion-->
</body>

</html>