<?php $pg ="Inicio"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">

    <title>Brian Flores</title>

</head>

<body>
    <div id="home" class="container-fluid">
        <header>
            <?php
            include_once("menu.php");
            ?>
        </header>
        <section id="Inicio" class="mb-5">
            <div class="container">
                <div class="row">
                    <div class="col-10 mb-3">
                        <span>Hola!</span>
                        <h1>
                            Bienvenidos a mi web
                        </h1>
                        <h2>Desarrollador full stack</h2>
                            <a href="proyectos.php" title="Mira mi trabajo" class="btn">Mira mi trabajo!</a>
                    </div>
            </div>
        </div>
        </section>
    </div>
    <?php
            include_once("footer.php");
            ?>
    
    <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
</body>

</html>