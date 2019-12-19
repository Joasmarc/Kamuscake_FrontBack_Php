<?php
require('conexion.php');
session_start();
// Validar que exista la sesion correcta
if (!isset($_SESSION['name'])) {
  header('location:index.php');
}
// Peticion de borrar mensaje
if (isset($_GET['delMsg'])) {
  $idDelMsg = $_GET['delMsg'];
  $queryDelMsg = "DELETE FROM mensajes WHERE id='$idDelMsg' ";
  $resultDelMsg = mysqli_query($conexion,$queryDelMsg);
  header('location:inicio.php');
}
// Peticion publicar torta
if (isset($_POST['pubTorta'])) {
  // datos
  $nameTorta = $_POST['nameTorta'];
  $dcrTorta = $_POST['dcrTorta'];
  $ctgTorta = $_POST['ctgTorta'];
  // if ($ctgTorta == "Cumpleaños") {
  //   $ctgTorta = "Cumpleanos";
  // }else if ($ctgTorta == "15 Años") {
  // }
  // img
  $imgTmp = $_FILES['imgTorta']['tmp_name'];
  $imgName = $_FILES['imgTorta']['name'];
  $imgId = uniqid($ctgTorta);
  $imgType = exif_imagetype($imgTmp);
  if ($imgType == 2) {
      $imgType = "jpg";
  }else if($imgType == 3){
      $imgType = "png";
  }
  $imgRoute = "../images/$ctgTorta/$imgId.$imgType";
  // peticion
  $queryPub = "INSERT INTO publicaciones(nombre,categoria,descripcion,imgRoute) VALUES('$nameTorta','$ctgTorta','$dcrTorta','$imgRoute')";
  $resultPub = mysqli_query($conexion,$queryPub);
  // manejar fichero img
  copy($imgTmp,$imgName);
  rename($imgName,$imgRoute);
  header('location:catalago.php');
}
// Eliminar publicacion de torta
if (isset($_GET['delPub'])) {
  $idPub = $_GET['delPub'];
  $queryDelImg = "SELECT imgRoute FROM publicaciones WHERE id='$idPub'";
  $resultDeImg = mysqli_query($conexion,$queryDelImg);
  $imgRouteDel = mysqli_fetch_array($resultDeImg);
  $queryDelPub = "DELETE FROM publicaciones WHERE id='$idPub' ";
  $ResultDelPub = mysqli_query($conexion,$queryDelPub);
  unlink($imgRouteDel['imgRoute']);
  header('location:catalago.php');
}
// montar en portada
if (isset($_POST['portada'])) {
  $imgTmp = $_FILES['imgPortada']['tmp_name'];
  $imgName = $_FILES['imgPortada']['name'];
  $pos = $_POST['pos'];
  copy($imgTmp,$imgName);
  rename($imgName,"../images/bb$pos.jpg");
  header('location:portada.php');
}
?>