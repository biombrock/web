<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/register.css">
    <title>registrate</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
</head>
<body>
    <form method="post">
    <h1 id="titulo">hola,nos alegra que te intereses registrarte en nuestro sitio web pero antes debemos de conocerte mejor :)</h1>
<div class="formulario">
    <div class="inputs">
              <div id="infopersonal">
            <h3>cuentanos un poco sobre ti</h5>
         <div class="input"> <i class="bi bi-person-fill"></i><input name="nombres"  class="form" type="text" placeholder=" nombres" required></div>
          <div class="input"> <i class="bi bi-person-fill"></i><input  name="apellidos" class="form" type="text" placeholder=" apellidos"required></div>
          <input name="fechadenacimiento" id="fechadenacimiento"  class="form" type="date"  placeholder=" fecha de nacimiento" >
          <select id="generos">
            <option value="">genero (opcional)</option>
            <option value="">masculino</option>
            <option value="">femenino</option>
            <option value="">39 tipos de gays xD</option>
            <option value="">prefiero no decirlo</option>
          </select>
         <div class="input"><i class='bx bxs-city'></i><input name="ciudad" class="form" type="text" placeholder="ciudad" ></div> 
          <div class="input"><i class="bi bi-telephone-fill"></i><input name="telefono" class="form" type="text" placeholder="numero telefonico" ></div>  
        </div>
        <div class="correoycontra">
         <div class="input"><i class="bi bi-envelope-fill"></i><input  name="correoelectronico" class="form" type="text"  placeholder=" correo electronico" required></div> 
          <div class="input"><img src="/img/iconocandado.png" class="candado" alt=""><input  name="contraseña"class="form" type="password" placeholder=" crea una contraseña"required></div>
          <div class="input"><input id="checkbx" type="checkbox"required>acepto los terminos y condiciones<br>
        </div>
        <a id="cancelarregistro" href="iniciarsesion.html">cancelar registro</a>
        <button name= "registrar" id="botones">finalizar registro</button>
    <script src="js/register.js"></script>
    </div>
</div>
    </form>

    <?php
    include("controladorregistrar.php");
    ?>
</body>
</html>