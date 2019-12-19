<?php
if (isset($_GET['categoria'])) {
  $categoria = $_GET['categoria'];
  header("location:catalago.php?categoria=$categoria");
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
  <link rel="shortcut icon" href="images/logo-sf.png" type="image/png" class="img-fluid">
  <title>Kmus Cake</title>
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
  <!--IconMoon-->
  <link href="css/style-iconmoon.css" rel='stylesheet' type='text/css' media="all">
  <!--//IconMoon-->
  <link href="//fonts.googleapis.com/css?family=Arimo:400,700" rel="stylesheet">
  <link href="//fonts.googleapis.com/css?family=Roboto:400,500,700,900" rel="stylesheet">
</head>

<body>
  <div class="main-top" id="home">
    <div class="headder-top">

  <!-- nav -->
  <div class="container">
    <nav class="row align-items-center">
      <div class="col-md-6" id="logo">
          <img src="images/logo-sf.png" class="w-25">
      </div>
      <div class="col-md-6">
        <label for="drop" class="toggle mr-2"><h3>Menu</h3></label>
        <input type="checkbox" id="drop">
        <ul class="menu mt-2">
          <li class="active">
            <a href="#home">Inicio</a>
          </li>
          <li>
          <!-- * -->
            <li class="mx-lg-3 mx-md-2 my-md-0 my-1">
              <!-- First Tier Drop Down -->
              <label for="drop-2" class="toggle toogle-2">Catalogo
                <span class="fa fa-angle-down" aria-hidden="true"></span>
              </label>
              <a href="#">Catalogo
                <span class="fa fa-angle-down" aria-hidden="true"></span>
              </a>
              <input type="checkbox" id="drop-2">
              <ul>
              <li>
                    <a href="catalago.php?categoria=Aniversario" class="drop-text">Aniversario</a>
                  </li>
                  <li>
                    <a href="catalago.php?categoria=Boda" class="drop-text">Bodas</a>
                  </li>
                  <li>
                    <a href="catalago.php?categoria=Celebraciones+Especiales" class="drop-text">Especiales</a>
                  </li>
                  <li>
                    <a href="catalago.php?categoria=Otras" class="drop-text">Otras</a>
                  </li>
                  <li>
                    <a href="catalago.php?categoria=Todas" class="drop-text">Todas</a>
                  </li>
              </ul>
            </li>
          <!-- * -->
          </li>
          <li>
            <a href="#preguntar">Contactanos</a>
          </li>
        </ul>
      </div>
    </nav>
  </div>
  <!-- //nav -->
</div>

  <!-- banner -->
  <div class="container">
      <div class="row main-banner">
        <div class="col-md-4 style-banner">
          <h3 class="mt-5 pt-3">Nos Dedicamos A La Elaboracion De Elegante Y Deliciosas Tortas Para Tu Evento Especial.</h3>
        </div>
        <div class="col-md-8 banner-imgs text-center mt-5">
          <div class="row no-gutters">
            <div class="col-sm-4 banner-right-images">
              <img src="images/bb1.jpg" alt="news image" class="img-fluid ">
            </div>
            <div class="col-sm-4 banner-right-images">
              <img src="images/bb2.jpg" alt="news image" class="img-fluid">
            </div>
            <div class="col-sm-4 banner-right-images">
              <img src="images/bb3.jpg" alt="news image" class="img-fluid">
            </div>
            <div class="col-sm-4 banner-right-images">
              <img src="images/bb4.jpg" alt="news image" class="img-fluid ">
            </div>
            <div class="col-sm-4 banner-right-images">
              <img src="images/bb5.jpg" alt="news image" class="img-fluid ">
            </div>
            <div class="col-sm-4 banner-right-images">
              <img src="images/bb6.jpg" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
  </div>
</div>
  <!-- //banner -->

  <!-- about -->
  <section class="about py-lg-4 py-md-3 py-sm-3 py-3" id="about">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row">

          <div class="col-lg-3 col-md-6 col-sm-6 about-two-grids my-3">
            <span class="fa fa-diamond mb-3" aria-hidden="true"></span>
            <h4>Variedad</h4>
            <div class="about-para-txt mt-2">
              <p>Ofrecemos las mas amplia variedad de dulces para distintas ocaciones y eventos, tanto como bodas, Fiestas infantiles, 15 años y mas!.</p>
            </div>
          </div>

        <div class="col-lg-3 col-md-6 col-sm-6 about-two-grids my-3">
          <span class="fa fa-diamond mb-3" aria-hidden="true"></span>
          <h4>Calidad</h4>
          <div class="about-para-txt mt-2">
            <p>Trabajamos con los mejores materiales y productos de mayor calidad en el mercado Venezolano e Internacional.</p>
          </div>
        </div>

        <div class="col-lg-3 col-md-6 col-sm-6 about-two-grids my-3">
          <span class="fa fa-birthday-cake mb-3" aria-hidden="true"></span>
          <h4>Encargos Online</h4>
          <div class="about-para-txt mt-2">
            <p>Ofrecemos distintas plataformas para aclarar todas las dudas de nuestros clientes de la manera mas rapida y accesible sin costo alguno.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- //about -->

  <!-- Online Order -->
  <section id="preguntar" class="advertise-count">
    <div class="container py-lg-5 py-md-4 py-sm-4 py-3">
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-7 contact-form-txt">
          <form action="mensaje.php" method="post">
            <div class="w3pvt-w3ls-contact-mid">
              <div class="form-group contact-forms">
                <input name="contacto" type="text" class="form-control" placeholder="Dato de contacto: Ej WhatsApp, Correo o Instagram" required>
              </div>
              <div class="form-group contact-forms">
                <textarea name="mensaje" class="form-control" placeholder="Formular Pregunta" rows="3" required></textarea>
              </div>
              <button name="pregunta" type="submit" class="btn sent-butnn"><h4>Preguntar</h4></button>
            </div>
          </form>
        </div>
    
        <div class="col-lg-6 col-md-6 text-center">
          <div class="order-show-w3ls">
            <h5>O Comunicate a traves de estas plataformas</h5>

            <ul class="mt-lg-4 mt-3">
              <li>
                <p>
                    <span class="icon-whatsapp"></span><h4>+58 000 0000</h4>
                </p>
              </li>
              <li class="mt-lg-3 mt-2">
                <p>
                  <span class=" icon-instagram"></span><h4>instagram</h4>
                </p>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--//Online Order -->

  <!-- footer -->
    <footer>
      <div class="bottem-wthree-footer text-center py-md-4 py-3">
        <p>
          © 2019. Todos Los Derechos Reservados | Desarrollado por
          <a href="" target="_blank">Joasmarc Developers</a>
        </p>
      </div>
    </footer>
  <!--//footer -->

  <!--script -->
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>

</html>