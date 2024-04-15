<?php
include("controladorproductos.php")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="" method="post">
    <div id="modal5">
        <div id="contenedor">
    <h3>puedes subir hasta 5 fotos de tu producto</h3>
    <div id="imagen">
        <div><img  id="imgp" src="#" alt=""></div>
    </div>
    <div id="descripcionbox">
    <h3>obligatorio</h3>
    <input class="tituloprecio" type="text" name="titulo" id="titulo" placeholder="titulo de la publicacion">
    <input class="tituloprecio" type="text"  name="precio" placeholder="precio">
    <select name="estado" class="select">
    <option value="">estado</option>
    <option value="">nuevo</option>
    <option value="">usado-como nuevo</option>
    <option value="">usado-buen estado</option>
    <option value="">usado-buen estado</option>
    </select>
    <select name="categoria" class="select">
        <option value="">categoria</option>
        <option value="">celulares</option>
        <option value="">laptops</option>
        <option value="">tablets</option>
        <option value="">computadores</option>
        <option value="">accesorios</option>
        <option value="">respuestos</option>
        </select>
    <p>Proporciona una descripción que sea lo más detallada posible.</p>
    <textarea name="descripcion" placeholder="escriba aqui...."> </textarea>
    <button name="publicar" > publicar</button>
    </div>
</div>

</div>     
    </form>
</body>
</html>