<?php
  require('conexion.php');
  session_start();
  // si existe login
  if (isset($_POST['ingreso'])) {
    // datos admin
    $user0 = "carmen";
    $pass0 = "kmu";
    // datos introducidos
    $user1 = $_POST['user'];
    $pass1 = $_POST['pass'];
    // validar similitud
    if ($user0 === $user1 && $pass0 === $pass1) {
      $_SESSION['name'] = "carmen";
    }else{
      header('location:index.php?failed=1');
    }
  // si no existe sesion
  }else if (!isset($_SESSION['name'])) {
    header('location:index.php');
  }
  // peticion de mensajes
  $queryLeerMensajes = "SELECT * FROM mensajes";
  $resultLeerMensajes = mysqli_query($conexion,$queryLeerMensajes);
  // includes
  include('includes/header.php');
  include('includes/nav.php');
  // include('includes/nav.php');
?>
<!-- tabla -->
<div class="container my-3">
  <div class="row justify-content-center">
    <h4 class="text text-secondary" ><span class='icon-mail2' ></span> Mensajeria</h4>
  </div>
  <div class="row justify-content-center">
    <div class="col-md-4 text-center">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Contacto</th>
            <th scope="col">Mensaje</th>
            <th scope="col">Motivo</th>
            <th scope="col">Eliminar</th>
          </tr>
        </thead>
        <tbody>
          <?php while ($row = mysqli_fetch_array($resultLeerMensajes)) { ?>
          <tr>
            <th scope="row"><?= $row['contacto'] ?></th>
            <td><?= $row['mensaje'] ?></td>
            <td><?= $row['motivo'] ?></td>
            <td><a href="procesador.php?delMsg=<?= $row['id'] ?>"><button class='btn btn-danger' ><span class="icon-bin" ></span></button></a></td>
          </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!--/tabla -->
<!-- footer -->
<?php
  include('includes/footer.php'); 
?>