<?php
require('admin/conexion.php');
// peticion de busqueda
if (isset($_GET['categoria'])) {
  $categoria = $_GET['categoria'];
  if ($categoria == "Todas") {
    $queryCatalago = "SELECT * FROM publicaciones";
  }else{
    $queryCatalago = "SELECT * FROM publicaciones WHERE categoria='$categoria'";
  }
}
// resultado de peticion
$resultCatalago = mysqli_query($conexion,$queryCatalago);
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
  <title>Gateau a hotel & Restaurant Category Bootstrap Responsive web Template|Blog :: w3layouts</title>
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
                    <a href="index.php?categoria=Aniversario" class="drop-text">Aniversario</a>
                  </li>
                  <li>
                    <a href="index.php?categoria=Boda" class="drop-text">Bodas</a>
                  </li>
                  <li>
                    <a href="index.php?categoria=Celebraciones+Especiales" class="drop-text">Especiales</a>
                  </li>
                  <li>
                    <a href="index.php?categoria=Otras" class="drop-text">Otras</a>
                  </li>
                  <li>
                    <a href="index.php?categoria=Todas" class="drop-text">Todas</a>
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

<div class="container">
  <?php while ($row = mysqli_fetch_array($resultCatalago)) { ?>
    <div class="row mt-lg-5 mt-md-4 mt-3">
      <div class="col-lg-6 color-img-three my-3 text-center">
        <img src="admin/<?= $row['imgRoute'] ?>" alt="news image" class="img-fluid w-75">
      </div>
      <div class="col-lg-6 blog-left-sub my-3">
        <h4 class="pb-3">
          <h1><?= $row['nombre'] ?></h1>
        </h4>
        <h5><?= $row['categoria'] ?></h5>
        <p><?= $row['descripcion'] ?></p>
        <div class="row mt-lg-4 mt-3">
          <div class="col-lg-6 col-md-6 col-sm-6">
            <div class="view-buttn text-center">
              <a href="javascript:mostrar<?= $row['id'] ?>();"><button name="" class="btn sent-butnn"><h4>Preguntar</h4></button></a>
            </div>
            <div id="flotante<?= $row['id'] ?>" style="display:none;">
              <form action="mensaje.php" method="post">
                <div class="form-group">
                  <label for="exampleInputEmail1">Dato de contacto</label>
                  <input name="datoContacto" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required>
                  <small id="emailHelp" class="form-text text-muted">Ingrese un DATO DE CONTACTO como numero de WhatsApp, Instagram o Correo para enviarle el costo</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Comentario (opcional)</label>
                  <input name="comentario" type="text" class="form-control" id="exampleInputPassword1" placeholder="Pregunta">
                  <input type="hidden" name="motivo" value="<?= $row['nombre'] ?>">
                </div>
                <button name="producto" type="submit" class="btn btn-danger">Enviar</button>
              </form>
              <div class='text-center' id="close"><a href="javascript:cerrar<?= $row['id'] ?>();">Cerrar</a></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <script languague="javascript">
    function mostrar<?= $row['id'] ?>() {
        div = document.getElementById('flotante<?= $row['id'] ?>');
        div.style.display = '';
    }
    function cerrar<?= $row['id'] ?>() {
        div = document.getElementById('flotante<?= $row['id'] ?>');
        div.style.display = 'none';
    }
    </script>
  <?php } ?>
</div>

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
        © 2019 Todos Los Derechos Reservados | Desarrollado por 
        <a href="" target="_blank">Joasmarc Developer</a>
      </p>
    </div>
  </footer>
  <!--//footer -->
  <!-- ocultar formulario -->
  <!-- <script languague="javascript">
    function mostrar() {
        div = document.getElementById('flotante');
        div.style.display = '';
    }
    function cerrar() {
        div = document.getElementById('flotante');
        div.style.display = 'none';
    }
  </script> -->
</body>
</html>