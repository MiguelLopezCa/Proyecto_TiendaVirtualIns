<?php 
$estudiante =[
    'id'=>$_POST['idInput'],
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

$sql="update estudiante set";
$sql.= " codigo='".$estudiante['codigo']."',";
$sql.= " nombre='".$estudiante['nombres']."',";
$sql.= " apellido='".$estudiante['apellidos']."',";
$sql.= " edad=".$estudiante['edad'];

$sql.=" where id=".$estudiante['id'];

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