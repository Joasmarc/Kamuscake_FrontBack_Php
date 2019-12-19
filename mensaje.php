<?php
require('admin/conexion.php');
// peticion de pregunta
if (isset($_POST['pregunta'])) {
  $contacto = htmlspecialchars($_POST['contacto']);
  $mensaje = $_POST['mensaje'];
  $motivo = "pregunta";
  $contEscape = mysqli_real_escape_string($conexion, $contacto);
  $mensEscape = mysqli_real_escape_string($conexion, $mensaje);
  $queryPreg = "INSERT INTO mensajes(contacto, mensaje, motivo) VALUES('$contEscape','$mensEscape','$motivo')";
  $ResultPreg = mysqli_query($conexion,$queryPreg);
  $notificacion = "Su Pregunta Se Envio Satisfactoriamente, Pronto le estaremos respondiendo.";
}
// peticion de pregunta de producto
if (isset($_POST['producto'])) {
  $datoContacto = $_POST['datoContacto'];
  $comentario = $_POST['comentario'];
  $motivo = $_POST['motivo'];
  $queryProducto = "INSERT INTO mensajes(contacto,mensaje,motivo) VALUES('$datoContacto','$comentario','$motivo')";
  $resultProducto = mysqli_query($conexion,$queryProducto);
  $notificacion = "Su pregunta por <h5> $motivo</h5> fue realizada con exito, pronto recibira el costo del producto";
}
?>
<!--A Design by W3layouts
  Author: W3layout
  Author URL: http://w3layouts.com
  License: Creative Commons Attribution 3.0 Unported
  License URL: http://creativecommons.org/licenses/by/3.0/
  -->
<!DOCTYPE html>
<html lang="zxx">

<head>
  <title>Mensajeria</title>
  <!--meta tags -->
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="Gateau Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
      Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
  <script>
    addEventListener("load", function () {
      setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
      window.scrollTo(0, 1);
    }
  </script>
  <!--//meta tags ends here-->
  <!--booststrap-->
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all">
  <!--//booststrap end-->
  <!-- font-awesome icons -->
  <link href="css/font-awesome.min.css" rel="stylesheet">
  <!-- //font-awesome icons -->
  <!--stylesheets-->
  <link href="css/style.css" rel='stylesheet' type='text/css' media="all">
  <!--//stylesheets-->
  <link href="//fonts.googleapis.com/css?family=Arimo:400,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
</head>

<body>
  <!--headder-->
  <div class="header-outs inner_page-banner " id="home">
    <div class="headder-top">
      <!--//navigation section -->
      <div class="container">
        <nav class="row align-items-center">
          <div class="col-md-6" id="logo">
            <img src="images/logo-sf.png" class="w-25">
          </div>
          <div class="col-md-6">
            <label for="drop" class="toggle mr-2">
              <h3>Menu</h3>
            </label>
            <input type="checkbox" id="drop">
            <ul class="menu mt-2">
              <li class="active">
                <a href="index.php">Inicio</a>
              </li>
              <li class="mx-lg-3 mx-md-2 my-md-0 my-1">
                <label for="drop-2" class="toggle toogle-2">Catalogo
                  <span class="fa fa-angle-down" aria-hidden="true"></span>
                </label>
                <a href="#">Catalogo
                  <span class="fa fa-angle-down" aria-hidden="true"></span>
                </a>
                <input type="checkbox" id="drop-2">
                <ul>
                  <li>
                    <a href="gallery.php" class="drop-text">Cumpleaños</a>
                  </li>
                  <li>
                    <a href="gallery.html" class="drop-text">Bodas</a>
                  </li>
                  <li>
                    <a href="gallery.html" class="drop-text">Fiestas Infantiles</a>
                  </li>
                  <li>
                    <a href="blog.html" class="drop-text">15 años</a>
                  </li>
                  <li>
                    <a href="blog.html" class="drop-text">Todas</a>
                  </li>
                </ul>
              <li>
                <a href="index.php#preguntar">Contactanos</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </div>
  <!--//headder-->
  
  <!-- mensaje -->
  <div class="div">
    <div class="row">
      <div class="col service-grid-wthree mt-5">
        <div class="ser-fashion-wthree">
          <div class="about-icon mb-md-4 mb-3">
            <span class="fa fa-thumbs-o-up" aria-hidden="true"></span>
          </div>
          <div class="ser-sevice-grid">
            <h2 class="pb-3">Mensaje Enviado</h2>
            <p><h3><?= $notificacion ?></h3></p>
          </div>
        </div>
        <a href="index.php"><button name="" class="btn sent-butnn mt-3"><h4>Volver a inicio</h4></button></a>
      </div>
    </div>
  </div>
  <!--/mensaje -->

  <!-- move icon -->
  <div class="text-center">
    <a href="#home" class="move-top text-center mt-3">
      <i class="fa fa-arrow-up" aria-hidden="true" style="color: black;"></i>
    </a>
  </div>
  <!--//move icon -->

  <!-- footer -->
  <footer>
    <div class="bottem-wthree-footer text-center py-md-4 py-3">
      <p>
        © 2019 Gateau. All Rights Reserved | Design by
        <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
      </p>
    </div>
  </footer>
  <!--//footer -->
</body>

</html>
<?php mysqli_close($conexion); ?>