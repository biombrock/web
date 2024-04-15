


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mi cuenta</title>
    <link rel="stylesheet" href="css/micuenta2.css">
</head>
<body>
    <div id="contenedor">
        <div id="informacionpersonal">
        <form action="" method="post">
            <?php
include "conexionbd.php";
$sql=$conexion ->query("select * from usuario");
if($datos = $sql->fetch_object()){?>
    <h2 id="titulo">informacion personal de la cuenta</h2>
            <div class="informacionp">
                <div class="titulosbox"><h4 class="titulos">nombres y apellidos</h4></div>
                <div class="informacion"> <p name="info" class="info"><?= $datos->nombres ?></p></div>
            </div>

            <div class="informacionp">
                <div class="titulosbox"><h4 class="titulos">correo electronico</h4></div>
                <div class="informacion"><p  name="info" class="info" ><?= $datos->correoelectronico ?></p></div>
            </div>

            <div class="informacionp">
                <div class="titulosbox"><h4 class="titulos">telefono</h4></div>
                <div class="informacion"><p  name="info" class="info" ><?= $datos->telefono ?></p></div>
            </div>

            <div class="informacionp">
                <div class="titulosbox"><h4 class="titulos">ciudad</h4></div>
                <div class="informacion"><p  name="info" class="info" ><?= $datos->ciudad ?></p></div>
            </div>
             <div id="cambiar">
                <a href="infochange.php?id=<?= $datos->userid?>">cambiar info</a>
             </div>
        </form>
<?php }
?>
        
        </div>
        
        
        <div id="seguridadbox">
            <h2 id="tituloseguridad">seguridad</h2>
            <div class="seguridad">
                <div id="autenticacion2p">
                    <p id="botonmodal1" class="seguridadopciones">activar autenticacion en 2 pasos</p>
                <div id="modal1">
                    <h2 class="titulom">agrega seguridad adicional a tu cuenta</h2>
                    <p class="textom">La autenticación en dos pasos protege tu cuenta con un código adicional que debes ingresar cuando inicias sesión en un dispositivo que no reconocemos. 
                        ten en cuenta que debes de poder acceder a tu numero telefonico o a tu correo electronico si quieres abrir tu cuenta en un dispositivo nuevo
                    </p>

                    <div id="metodosseguridad">
                        <h4 class="titulom">codigo de seguridad a tu correo electronico</h4>
                        <div class="opcionesseguridad">
                            <p class="textom">te enviaremos un codigo a tu correo electronico cada vez que se inicie sesion en un dispositivo nuevo.</p>
                            <input class="checkbox" type="checkbox" name="" id="">
                        </div>
                        <h4 class="titulom">codigo de seguridad a tu numero telefonico (recomendado)</h4>
                        <div class="opcionesseguridad">
                            <p class="textom">te enviaremos un codigo mediante SMS  a tu numero telefonico cada vez que se inicie sesion en un dispositivo nuevo.</p>
                            <input class="checkbox" type="checkbox" name="" id="">
                        </div>
                    </div>    
                    <button class="confirmar">continuar</button>           
                </div>
                </div>
                <div id="modal2">
                    <h3 id="titulom">escribe tu correo electronico</h3>
                    <p class="textom">ingresa el codigo que se va a enviar a continuacion para confirmar que el correo electronico que ingresaste te pertenece</p>
                   <div id="inputsbox">
                    <input class="inputs" type="email" placeholder="correo electronico"required>
                    <input class="inputs" type="text" placeholder="ingresa el codigo de 5 digitos" required>
                  </div>
                    <button class="confirmar">confirmar</button>
                </div>
                <div id="modal3">
                    <h3 id="titulom">escribe tu numero telefonico</h3>
                    <p class="textom">ingresa el codigo que se va a enviar a continuacion para confirmar que el numero telefonico que ingresaste te pertenece</p>
                   <div id="inputsbox">
                    <input class="inputs" type="email" placeholder="numero telefonico"required>
                    <input class="inputs" type="text" placeholder="ingresa el codigo de 5 digitos" required>
                  </div>
                    <button class="confirmar">confirmar</button>
                </div>
                </div>
                <div class="seguridad">
                    <p class="seguridadopciones">cambiar contraseña</p>
                    <div id="modal4">
                        <p class="textom">la contraseña debe de tener minimo 8 caracteres y 1 numero</p>
                        <input class="inputs" type="password" placeholder="ingrese una contraseña">
                        <input  class="inputs" type="password" placeholder="repita la contraseña"> <br>
                        <button class="confirmar">confirmar</button>
                    </div>
            </div>
            <div class="seguridad">
                <p class="seguridadopciones">dispositivos en los que se ha iniciado sesion</p>
        </div>
            
        </div>
    </div>
    <script src="cambiarinfo.js">
        
    </script>
</body>
</html>