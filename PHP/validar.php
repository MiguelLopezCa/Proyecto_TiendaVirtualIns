<?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']= $usuario;
include('db.php');
$consulta= "SELECT*FROM persona where  usuario= '$usuario' and contraseña='$contraseña' ";
$resultado=mysqli_query($conexion,$cosnsulta);
$filas=mysqli_num_rows($resultado); 
 if($filas){
     header("location:inicio.html");
 }else{
?>
<?php 
include("login.hmtl");
?>
<h1>Error en la autentificacion</h1>
<?php
 }
 mysqli_free_result($resultado);
 mysqli_close($conexion);