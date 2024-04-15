<?php
include("conexionbd.php");

if(isset($_POST[''])){
  if(
    strlen($_POST['nombres']) >= 1 &&
    strlen($_POST['apellidos']) >= 1 &&
    strlen($_POST['ciudad']) >= 1 &&
    strlen($_POST['telefono']) >= 1 &&
    strlen($_POST['correoelectronico']) >= 1 &&
    strlen($_POST['contraseña']) >= 1
    ){
      $nombres = trim($_POST['nombres']);
      $apellidos = trim($_POST['apellidos']);
      $ciudad = trim($_POST['ciudad']);
      $telefono = trim($_POST['telefono']);
      $correoelectronico= trim($_POST['correoelectronico']);
      $contraseña = trim($_POST['contraseña']);
      $fecha = date('Y-m-d');
      $consulta ="INSERT INTO usuario (nombres, apellidos, ciudad, telefono, correoelectronico, contraseña, fecha)
      VALUES('$nombres','$apellidos','$ciudad','$telefono','$correoelectronico','$contraseña','$fecha')";
      $resultado = mysqli_query($conexion, $consulta);
  }
}
?>