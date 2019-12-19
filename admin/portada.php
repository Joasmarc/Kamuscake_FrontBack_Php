<?php
require('conexion.php');
session_start();
// validar que exista la sesion correcta
if (!isset($_SESSION['name'])) {
  header('location:index.php');
}

include('includes/header.php');
include('includes/nav.php');
?>
<div class="container">
  <div class="row">

    <div class="col-md-4 text-center border my-2">
      <div class="form-group">
        <img class="w-50" src="../images/bb1.jpg">
      </div>
      <form method="post" action="procesador.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlFile1">Foto de Portada 1 (formato jpg)</label>
          <input name="imgPortada" type="file" class="form-control-file" id="exampleFormControlFile1">
          <input type="hidden" name="pos" value="1">
          <button name="portada" type="submit" class="btn btn-secondary mt-2"><h5>Cargar</h5></button>
        </div>
      </form>
    </div>

    <div class="col-md-4 text-center border my-2">
      <div class="form-group">
        <img class="w-50" src="../images/bb2.jpg">
      </div>
      <form method="post" action="procesador.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlFile1">Foto de Portada 2 (formato jpg)</label>
          <input name="imgPortada" type="file" class="form-control-file" id="exampleFormControlFile1">
          <input type="hidden" name="pos" value="2">
          <button name="portada" type="submit" class="btn btn-secondary mt-2"><h5>Cargar</h5></button>
        </div>
      </form>
    </div>
  
    <div class="col-md-4 text-center border my-2">
      <div class="form-group">
        <img class="w-50" src="../images/bb3.jpg">
      </div>
      <form method="post" action="procesador.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlFile1">Foto de Portada 3 (formato jpg)</label>
          <input name="imgPortada" type="file" class="form-control-file" id="exampleFormControlFile1">
          <input type="hidden" name="pos" value="3">
          <button name="portada" type="submit" class="btn btn-secondary mt-2"><h5>Cargar</h5></button>
        </div>
      </form>
    </div>
  
    <div class="col-md-4 text-center border my-2">
      <div class="form-group">
        <img class="w-50" src="../images/bb4.jpg">
      </div>
      <form method="post" action="procesador.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlFile1">Foto de Portada 4 (formato jpg)</label>
          <input name="imgPortada" type="file" class="form-control-file" id="exampleFormControlFile1">
          <input type="hidden" name="pos" value="4">
          <button name="portada" type="submit" class="btn btn-secondary mt-2"><h5>Cargar</h5></button>
        </div>
      </form>
    </div>
  
    <div class="col-md-4 text-center border my-2">
      <div class="form-group">
        <img class="w-50" src="../images/bb5.jpg">
      </div>
      <form method="post" action="procesador.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlFile1">Foto de Portada 5 (formato jpg)</label>
          <input name="imgPortada" type="file" class="form-control-file" id="exampleFormControlFile1">
          <input type="hidden" name="pos" value="5">
          <button name="portada" type="submit" class="btn btn-secondary mt-2"><h5>Cargar</h5></button>
        </div>
      </form>
    </div>
  
    <div class="col-md-4 text-center border my-2">
      <div class="form-group">
        <img class="w-50" src="../images/bb6.jpg">
      </div>
      <form method="post" action="procesador.php" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleFormControlFile1">Foto de Portada 6 (formato jpg)</label>
          <input name="imgPortada" type="file" class="form-control-file" id="exampleFormControlFile1">
          <input type="hidden" name="pos" value="6">
          <button name="portada" type="submit" class="btn btn-secondary mt-2"><h5>Cargar</h5></button>
        </div>
      </form>
    </div>

  </div>
</div>

<?php include('includes/footer.php'); ?>