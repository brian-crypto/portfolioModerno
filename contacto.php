<?php $pg ="Contacto"; 

include_once "PHPMailer/src/PHPMailer.php";
include_once "PHPMailer/src/SMTP.php";


function guardarCorreo($correo){
  $archivo = fopen("mails.txt", "a+");
  fwrite($archivo, $correo. ";\n");
  fclose($archivo);
}




if($_POST){
  $nombre = $_POST["txtNombre"];
  $correo = $_POST["txtCorreo"];
  $asunto = $_POST["txtAsunto"];
  $mensaje = $_POST["txtMensaje"];

  if($nombre != "" && $correo !="")

  { guardarCorreo($correo);

  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPAuth = true;
  $mail->Host = "mail.briantomasflores.com.ar"; // SMTP a utilizar. Por ej. smtp.elserver.com
  $mail->Username = "flores.brian.tomas@gmail.com"; // Correo completo a utilizar
  $mail->Password = "clubboca1'1";
  $mail->Port = 25;
  $mail->From = "flores.brian.tomas@gmail.com"; // Desde donde enviamos (Para mostrar)
  $mail->FromName = "Brian Tomas Flores";
  $mail->IsHTML(true);

  //Destinatario
  $mail->addAddress($correo);
  $mail->addBCC("nelson.tarche@gmail.com");
  $mail->Subject = "Contacto página web";
  $mail->Body = "Recibimos tu consulta, te responderemos a la brevedad.";
  //$exito = $mail->Send();
  $mail->ClearAllRecipients(); //Borra los destinatarios

  //Nosotros
  $mail->addAddress("nelson.tarche@gmail.com");
  $mail->Subject = "Recibiste un mensaje desde tu página web";
  $mail->Body = "Te escribio $nombre cuyo correo es $correo, con el asunto $asunto y el siguiente mensaje:<br><br>$mensaje";
if($mail->Send()){
  header('Location:confirmacion-envio.php');
} else{
  $msg = "Error al enviar el correo, intente nuevamente mas tarde";
}

  } else {
    $msg = "Falta completar datos";
  }
}


?>


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

  <title>Contacto</title>
</head>

<body>

  <header>
  <?php

  include_once("menu.php");

  ?>  
  </header>
  <section id="contacto">
  <?php if(isset($msg) && $msg != ""): ?>
  <div class="row">
      <div class="col-12">
        <div class="alert alert-success" role="alert">
              <?php echo $msg; ?>
        </div> 
              
      </div>
  </div>
  <?php endif; ?>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1>¡Trabajemos juntos!</h1>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-5">
          <p>Para más detalles sobre
            mi trabajo podés ver mi Linkedin
            descargar mi CV o mandarme un mensaje.</p>

        </div>
      </div>



      <form action="" method="POST">
        <div class="row">
          <div class="col-6">
            <div class="form-group">
              <input type="text" class="form-control" required id="txtNombre" name="txtNombre" placeholder="NOMBRE" required valud="<?php echo isset($_POST["txtNombre"])? $_POST["txtNombre"] : ""; ?>">
            </div>
          </div>
          <div class="col-6">
            <div class="form-group">
              <input type="email" id="Correo" name="txtCorreo" class="form-control" placeholder="CORREO" required valud="<?php echo isset($_POST["txtCorreo"])? $_POST["txtCorreo"] : ""; ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <input type="text" class="form-control" required id="txtAsunto" name="txtAsunto" placeholder="ASUNTO" required valud="<?php echo isset($_POST["txtAsunto"])? $_POST["txtAsunto"] : ""; ?>">
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <textarea name="txtMensaje" id="txtMensaje" rows="8" class="form-control"
                placeholder="MENSAJE" required valud="<?php echo isset($_POST["txtMensaje"])? $_POST["txtMensaje"] : ""; ?>"></textarea>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="offset-md-5">
            <input type="submit" name="btnEnviar" value="ENVIAR" class="btn btn-md">
          </div>
        </div>
      </form>

    </div>


  </section>
  <?php
            include_once("footer.php");
            ?>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <!--menu navegacion-->
</body>

</html>