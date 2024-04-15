<?php
include("conexionbd.php");
if(isset($_POST['publicar'])){
    if(
        strlen($_POST['titulo']) >= 1 &&
        strlen($_POST['precio']) >= 1 &&
        isset($_POST['estado']) && // Verifica si se ha seleccionado un estado
        isset($_POST['categoria']) && // Verifica si se ha seleccionado una categoría
        strlen($_POST['descripcion'])>= 1 &&
        strlen($_POST['ubicacion'])>= 1
    ){
       $titulo = trim($_POST['titulo']);
       $precio = trim($_POST['precio']);
       $estado = $_POST['estado']; // Se obtiene el valor seleccionado del campo 'estado'
       $categoria = $_POST['categoria']; // Se obtiene el valor seleccionado del campo 'categoria'
       $descripcion = trim($_POST['descripcion']);
       $ubicacion = trim($_POST['ubicacion']);
       $fecha =date('d/m/a');
       $consulta= "INSERT INTO producto (titulo,precio,fechap,estado,categoria,descripcion,ubicacion) 
       VALUES ('$titulo','$precio','$fecha','$estado','$categoria','$descripcion','$ubicacion' )";
       $resultado = mysqli_query($conexion, $consulta);
    }
}
?>
