<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="shortcut icon" href="../resource/logo.jpg">
    <link rel="stylesheet" href="../CSS/registrar.css">

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
</head>
<body>
    <?php 
    if($resultadoQuery){
        echo '<div id="usuarioCreado">
        <label id="tit"> Registro exitoso</label>
        <br>
        <a id="btnLogin" href= "login.php">Ingresar</a>
        </div>';
    }else{
        echo '<p>presentó un error al guardar los datos. Vuelva a intentar</P>';
        echo '<br>'; 
        echo '<a href= "administrador.php">Volver</a>';
    }
    ?>
</body>
</html>