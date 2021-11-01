<?php 
$estudiante =[
    'codigo'=>$_POST['codigoInput'],
    'nombres'=>$_POST['nombresInput'],
    'apellidos'=>$_POST['apellidosInput'],
    'edad'=>$_POST['edadInput']
];
$servidorDB = "localhost:3306";
$nombreDb = "estudiantes_db";
$usuarioDb = "root";
$passwordDB = "";

// Create connection
$conn = new mysqli($servidorDB, $usuarioDb,$passwordDB,$nombreDb );

$sql="insert into estudiante (codigo , nombre , apellido , edad)";
$sql.="values('".$estudiante['codigo'] ."','".$estudiante['nombres'] ."','".$estudiante['apellidos'] ."',". $estudiante['edad'].")";
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
        echo '<a href= "index.php">Volver a la lista</a>';
    
    }else{
        echo '<p>presentó un error al guardar los datos. Vuelva a intentar</P>';
        echo '<br>'; 
        echo '<a href= "form_estudiantes.php">Volver</a>';
    }
    ?>
</body>
</html>