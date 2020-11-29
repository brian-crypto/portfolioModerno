<?php $pg ="Contacto"; 

include_once "PHPMailer/src/PHPMailer.php";

if($_POST){
  $nombre = $_POST["txtNombre"];
  $correo = $_POST["txtCorreo"];
  $asunto = $_POST["txtAsunto"];
  $mensaje = $_POST["txtMensaje"];


  $mail = new PHPMailer();
  $mail->IsSMTP();
  $mail->SMTPAuth = true;
  $mail->Host = "mail.briantomasflores.com.ar"; // SMTP a utilizar. Por ej. smtp.elserver.com
  $mail->Username = "flores.brian.tomas@gmail.com"; // Correo completo a utilizar
  $mail->Password = "clubboca101";
  $mail->Port = 25;
  $mail->From = "flores.brian.tomas@gmail.com"; // Desde donde enviamos (Para mostrar)
  $mail->FromName = "Brian Tomas Flores";
  $mail->IsHTML(true);

  //Destinatario
  $mail->addAddress($correo);
  $mail->addBCC("nelson.tarche@gmail.com");
  $mail->Subject = "Contacto página web";
  $mail->Body = "Recibimos tu consulta, te responderemos a la brevedad.";
  $exito = $mail->Send();
  $mail->ClearAllRecipients(); //Borra los destinatarios

  //Nosotros
  $mail->addAddress("flores.brian.tomas@gmail.com");
  $mail->Subject = "Recibiste un mensaje desde tu página web";
  $mail->Body = "Te escribio $nombre cuyo correo es $correo, con el asunto $asunto y el siguiente mensaje:<br><br>$mensaje";
  $exito = $mail->Send();

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
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <h1>¡Gracias, recibimos tu consulta!</h1>
        </div>
      </div>
  </section>
  <footer class="links">
    <div class="container">
      <div class="row py-5">
          <div class="col-sm-4 col-12 text-sm-left text-center">
              <a href="index.php"><b>&#169;Todos los derechos reservados <br>2020</b></a>
          </div>
          <div class="col-sm-4 col-12 text-center py-4 py-sm-0">
              <a href="https://api.whatsapp.com/send?phone=541162423341&text=Hola" target="_blank"><i class="fab fa-whatsapp"></i></a>
              <a href="https://www.linkedin.com/in/nelson-daniel-tarche/" target="_blank"><i class="fab fa-linkedin"></i></a>
              <a href="https://github.com/ntarche/fullstack" target="_blank"><i class="fab fa-github"></i></a>
          </div>
          <div class="col-sm-4 col-12 text-sm-right text-center">
              Patrocinado por<br><a href="https://depcsuite.com" target="_blank">DePC Suite</a>
          </div>
      </div>
  </div>
  </footer>

  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <!--menu navegacion-->
</body>

</html>