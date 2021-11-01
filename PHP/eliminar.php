<?php 
$id = empty($_GET['idE']) ? 0 : $_GET['idE'];
$servidorDB = "localhost:3306";
$nombreDb = "estudiantes_db";
$usuarioDb = "root";
$passwordDB = "";

// Create connection
$conn = new mysqli($servidorDB, $usuarioDb,$passwordDB,$nombreDb );

$sql="delete from estudiante ";
$sql .= " where id=" . $id;

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
        echo '<p>Se elimino el registro.</P>';
    }else{
        echo '<p>presentó un error al guardar los datos. Vuelva a intentar</P>';
    }
    echo '<br>'; 
    echo '<a href= "index.php">Volver a la lista</a>';
    ?>
</body>
</html>