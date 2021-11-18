<?php 
$identificacion = empty($_GET['identificacion']) ? 0 : $_GET['identificacion'];
$servidorDB = "localhost:3306";
$nombreDb = "tiendavirtual";
$usuarioDb = "root";
$passwordDB = "";

// Create connection
$conn = new mysqli($servidorDB, $usuarioDb,$passwordDB,$nombreDb );

$sql="delete from persona ";
$sql .= " where 'identificacion' =".$identificacion;

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
    echo '<a href= "listaDeUsuarios.php">Volver a la lista</a>';
    ?>
</body>
</html>