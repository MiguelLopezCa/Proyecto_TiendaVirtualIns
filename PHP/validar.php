<style> 
#msgError{
  position:absolute;
  width:180px;
  height:30px;
  left:calc( 52% - 90px);
  color:red;
  font-size: 10px;
  top: 60%;
}
</style>
<?php
include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
$rol=$_POST['rol'];
session_start();
$_SESSION['usuario']=$usuario;


$conexion=mysqli_connect("localhost","root","","tiendavirtual");

$consulta="SELECT*FROM persona where usuario='$usuario' and contraseña='$contraseña' and rol='$rol'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($rol){
    if ($rol=='cliente'){
      header("location:../PHP/inicio.php");
    }else{
     header("location:../PHP/administrador.php");
    }

}else{
    ?>
   
    <?php
      include("../PHP/login.php");
  ?>
  <h1 id="msgError" class="bad">ERROR DE AUTENTIFICACION</h1>
  <?php
  
}
mysqli_free_result($resultado);
mysqli_close($conexion);