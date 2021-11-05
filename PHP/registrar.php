<?php 
$persona =[
    'nombres'=>$_POST['nombre'],
    'apellidos'=>$_POST['apellido'],
    'identificacion'=>$_POST['identificacion'],
    'contraseña'=>$_POST['contraseña'],
    'usuario'=>$_POST['usuario'],
    'rol'=>$_POST['rol'],
    'telefono'=>$_POST['telefono'],
];
$servidorDB = "localhost:3306";
$nombreDb = "tiendavirtual";
$usuarioDb = "root";
$passwordDB = "";

// Create connection
$conn = new mysqli($servidorDB, $usuarioDb,$passwordDB,$nombreDb );

$sql="insert into persona (nombre , apellido , identificacion , contraseña , usuario , rol , telefono )";
$sql.="values('".$persona['nombres'] ."','".$persona['apellidos'] ."','".$persona['identificacion'] ."','".$persona['contraseña'] ."','".$persona['usuario'] ."','".$persona['rol'] ."',".$persona['telefono'] .")";
$resultadoQuery= $conn->query($sql);

$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    
    <title>Registro</title>
</head>
<body>
    <h1>Resultado de la operación</h1>
    <?php 
    if($resultadoQuery){
        echo '<p>Registro exitoso</P>';
        echo '<br>'; 
        echo '<a href= "login.php">Ingresar</a>';
    
    }else{
        echo '<p>presentó un error al guardar los datos. Vuelva a intentar</P>';
        echo '<br>'; 
        echo '<a href= "creacionUsuario.php">Volver</a>';
    }
    ?>
</body>
</html>