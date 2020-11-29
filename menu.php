

<nav class="navbar navbar-expand-md navbar-dark">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault"
        aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item ">
            <a class="nav-link"<?php echo $pg == "Inicio"? "active":" "; ?> href="index.php" title="Ir a Inicio">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" <?php echo $pg == "Sobre-mi"? "active":" "; ?>href="sobre-mi.php" title="Ir a Sobre mi">Sobre mi <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" <?php echo $pg == "Proyecto"? "active":" "; ?>href="proyectos.php" title="Ir a Proyectos">Proyectos <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item ">
            <a class="nav-link" <?php echo $pg == "Contacto"? "active":" "; ?>href="contacto.php" title="Ir a Contacto">Contacto <span class="sr-only">(current)</span></a>
          </li>
        </ul>
      </div>
    </nav>