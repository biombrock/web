
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <title>iniciar sesion</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    

</head>
<body>
<div class="formulario">
    <form action="controladorlogin.php" method="post">
<h1 id="titulo">hola, me alegra verte de nuevo :)</h1>
    <div class="inputs">
     <!--inputs para iniciar sesion-->
        <div class="usuario">
           <button class="iconos"><i class='bx bx-user'></i></button>
           <input name="correo" class="form" type="text"  placeholder=" correo " required><br> 
        </div>
        <div class="contraseña">
           <button class="iconos"><i class='bx bx-key' ></i></button>
           <input name="contraseña" class="form" type="password" placeholder="     contraseña"required>
        </div>
    </div>
<a href="contraseñaolvidada.html" class="text">olvidaste tu contraseña?</a>
<button id="iniciar" name="ingresar">ingresar</button>
 <a href="registrarse.html" class="text">no tienes cuenta?</a>

</div>
</form>
    
</body>
</html>