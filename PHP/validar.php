
<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$rol=$_POST['rol'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","tiendavirtual");

$consulta="SELECT*FROM persona where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    if ($rol=='cliente'){
      header("location:../PHP/inicio.php");
    }else{
      header("location:../PHP/listaDeUsuarios.php");
    }

}else{
    ?>
   
    <?php
      include("../PHP/login.php");
  ?>
  <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);