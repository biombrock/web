<?php
include("conexionbd.php");


$mensaje ="";
if (isset($_GET["id"]) && 
isset($_GET["nombres"]) && 
isset($_GET["apellidos"]) &&
isset($_GET["correo"]) &&
isset($_GET["telefono"]) &&
isset($_GET["ciudad"])
) {
$ide = $_GET["id"];
$nombres = $_GET["nombres"];
$apellidos = $_GET["apellidos"];
$correo = $_GET["correo"];
$tel = $_GET["telefono"];
$ciudad = $_GET["ciudad"];
$sql = $conexion->query("UPDATE usuario SET nombres='$nombres', apellidos='$apellidos', correoelectronico='$correo', telefono='$tel', ciudad='$ciudad' WHERE userid='$ide'");
$mensaje = ($conexion->affected_rows?"OK informacion actualizada":"No se detectaron cambios en tus datos.");
//--------------------------------------------------
}





if (@$_GET["id"]) {
$id=$_GET["id"];
$check = $conexion->query("select * from usuario WHERE userid =$id");
$ext_info = $check->fetch_array();

if ($check->num_rows == FALSE) {
echo "Error el <b>IDE</b> del usuario NO existe !";
exit;
}
//------------------------
}else{
echo "Debes escribir el ide del usuario en los parametros de la URL GET !";
exit;
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<link rel="stylesheet" href="css/cambiarinfo.css">
</head>
<body>
<div id="contenedor">
<form action="infochange.php" method="GET">

<input type="hidden" name="id" value="<?php echo $id;?>">


<div class="modalcambio">
<h3 class="titulosmc">nombres y apellidos</h3>
<div class="inputscontainer">
<input type="text" class="inputm" placeholder="nombres"  name="nombres" value="<?php echo $ext_info["nombres"];?>">
<input type="text" class="inputm" placeholder="apellidos" name="apellidos" value="<?php echo $ext_info["apellidos"];?>">
</div>
<p class="testo">Si cambias tu nombre, no podrás volver a cambiarlo durante 60 días.</p>
</div>




<div class="modalcambio">
<h3 class="titulosmc">correo electronico</h3>
<p class="testo">para verificar que este correo electronico te pertenece ingresa el codigo de seguridad</p>
<div class="inputscontainer">
<input type="text" class="inputm"  placeholder="correo electronico" name="correo" value="<?php echo $ext_info["correoelectronico"];?>">
<input type="text" class="inputm"  placeholder="codigo" name="codigo">
</div>
</div>


<div class="modalcambio">
<h3 class="titulosmc">numero de telefono</h3>
<p class="testo">para verificar que este numero de telefono te pertenece ingresa el codigo de seguridad</p>
<div class="inputscontainer">
<input type="text" class="inputm" name="telefono" value="<?php echo $ext_info["telefono"];?>">
</div>
</div>


<div class="modalcambio">
<h3 class="titulosmc">ciudad</h3>
<p class="testo">se recomienda poner la ciudad en la que estas viviendo actualmente</p>
<div class="inputscontainer">
<input type="text" class="inputm"  placeholder="ciudad" name="ciudad" value="<?php echo $ext_info["ciudad"];?>">
</div>
<button type="submit" class="cambiar">cambiar</button>
<hr>
<b><?php echo $mensaje;?></b>

</div>




</form>
<script href="js/cambiarinfo.js"></script>
</div>
</body>
</html>