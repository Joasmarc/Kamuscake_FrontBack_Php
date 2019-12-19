<!-- backend -->
<?php
session_start();
if (isset($_GET['failed'])) {
  echo "<h1 class='text text-danger'>Datos incorrectos</h1>";
}
if (isset($_GET['cerrar']) && $_GET['cerrar'] == 1) {
  session_destroy();
}
if (isset($_SESSION['name'])) {
  header('location:inicio.php');
}
  include("includes/header.php");
?>
<!--/backend -->

<!-- fronted -->
<div class="container">
    <div class="row">
        <div class="col text-center">
            <img class="w-25" src="../images/logo-sf.png" alt="" srcset="">
        </div>
    </div>
    <div class="row">
        <div class="col text-center">
            <form action="inicio.php" method="post">
                <h3 class="text-secondary">Usuario</h3>
                <input name="user" class="mb-3" type="text" required>
                <br>
                <h3 class="text-secondary">Contraseña</h3>
                <input name="pass" type="password" required>
                <br>
                <button name="ingreso" type="submit" class="btn btn-secondary my-1 mb-3"><h5>Ingresar</h5></button>
                <br>
            </form>
        </div>
    </div>
</div>
<!--/fronted -->

<?php include("includes/footer.php"); ?>