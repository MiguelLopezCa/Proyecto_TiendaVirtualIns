<?php 
$persona =[
    'nombres'=>'',
    'apellidos'=>'',
    'identificacion'=>'',
    'contraseña'=>'',
    'usuario'=>'',
    'rol'=>'',
    'telefono'=>3,
];
$servidorDB = "localhost:3306";
$nombreDb = "tiendavirtual";
$usuarioDb = "root";
$passwordDB = "";

// Create connection
$conn = new mysqli($servidorDB, $usuarioDb,$passwordDB,$nombreDb );

$sql="update persona set";
$sql.= " nombre='".$persona['nombres']."',";
$sql.= " apellido='".$persona['apellidos']."',";
$sql.= " contraseña='".$persona['contraseña']."',";
$sql.= " usuario='".$persona['usuario']."',";
$sql.= " rol='".$persona['rol']."',";
$sql.= " telefono='".$persona['telefono']."',";


$sql.=" where id=".$persona['identificacion'];

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
        echo '<p>Actualizacion exitosa</P>';
        echo '<br>'; 
        echo '<a href= "index.php">Volver a la lista</a>';
    
    }else{
        echo '<p>presentó un error al guardar los datos. Vuelva a intentar</P>';
        echo '<br>'; 
        echo '<a href= "form_estudiantes.php?idE='.$estudiante['id'].'">Volver</a>';
       
    }
    ?>
</body>
</html>