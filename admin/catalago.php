<?php
  session_start();
  require('conexion.php');
  // validar que exista la sesion correcta
  if (!isset($_SESSION['name'])) {
    header('location:index.php');
  }
  // peticion php
  $queryCatalago = "SELECT * FROM publicaciones";
  $resultPub = mysqli_query($conexion,$queryCatalago);

  include('includes/header.php');
  include('includes/nav.php');
?>

<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-4 border">
      <form action="procesador.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlFile1"><h6>Imagen Torta</h6></label>
          <input name="imgTorta" type="file" class="form-control-file" accept="image/jpeg, image/png" id="exampleFormControlFile1" required>  </div>
          <div class="form-group">
            <label for="exampleFormControlInput1"><h6>Nombre Torta</h6></label>
            <input name="nameTorta" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Ingresar Aqui" required>
          </div>
          <div class="form-group">
            <label for="exampleFormControlSelect1"><h6>Tipo De Evento</h6></label>
            <select name="ctgTorta" class="form-control" id="exampleFormControlSelect1">
              <option>Aniversario</option>
              <option>Boda</option>
              <option>Celebraciones Especiales</option>
              <option>Otras</option>
            </select>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1"><H6>Descripcion De La Torta</H6></label>
            <textarea name="dcrTorta" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>
          <div class="form-group">
            <button name="pubTorta" type="submit" class="btn btn-secondary"><h6>Publicar Torta</h6></button>
          </div>
        </dvi>
      </form>
    </div>
  </div>
</div>

<div class="container">
<?php while ($row = mysqli_fetch_array($resultPub)) { ?>
  <div class="row mt-lg-5 mt-md-4 mt-3">
    <div class="col-lg-6 color-img-three my-3">
      <img src="<?= $row['imgRoute'] ?>" alt="news image" class="img-fluid">
    </div>
    <div class="col-lg-6 blog-left-sub my-3">
      <h4 class="pb-3">
        <h1><?= $row['nombre'] ?></h1>
      </h4>
      <h5><?= $row['categoria'] ?></h5>
      <p><?= $row['descripcion'] ?></p>
      <div class="row mt-lg-4 mt-3">
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="view-buttn">
            <a href="procesador.php?delPub=<?= $row['id'] ?>"><button type="submit" class="btn btn-danger"><h4>Desmontar</h4></button></a>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } ?>
</div>

<?php include('includes/footer.php'); ?>