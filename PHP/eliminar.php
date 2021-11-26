<?php 
include'../PHP/db.php';
$identificacion = empty($_GET['identificacion']) ? 0 : $_GET['identificacion'];
$sql="delete from persona ";
$sql .= " where identificacion =". $identificacion;
$resultadoQuery= $conn->query($sql);

$conn->close();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../resource/logo.jpg">
    <link rel="stylesheet" href="../CSS/eliminar.css">
    
    <title>Registro</title>
</head>
<body>
    <h1>Resultado de la operación</h1>
    <?php 
    if($resultadoQuery){
        echo '<p>Se eliminó el registro.</P>';
    }else{
        echo '<p>presentó un error al eliminar los datos. Vuelva a intentar</P>';
    }
    echo '<br>'; 
    echo '<a href= "administrador.php"><button>Volver a la lista</button></a>';
    ?>
</body>
</html>