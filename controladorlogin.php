 <?php
 $usuario = $_POST['correo'];
 $contraseña = $_POST ['contraseña'];
 session_start();
 $_SESSION ['correo']=$usuario;

 include('conexionbd.php');
 $consulta ="SELECT*from usuario WHERE correoelectronico='$usuario' and contraseña= '$contraseña'";
 $resultado = mysqli_query($conexion,$consulta);
 $filas=mysqli_num_rows($resultado);
 if($filas){
    header("location:test.html");
 }else{
    ?>
    <?php
    include("iniciarsesion.php");
    ?>
    <h1 id="bad">error en la autenticacion</h1>
    <?php
 }
 mysqli_free_result($resultado);
 mysqli_close($conexion);