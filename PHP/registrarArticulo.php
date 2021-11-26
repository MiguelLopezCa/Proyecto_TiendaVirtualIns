<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <link rel="stylesheet" href="../CSS/registrarArticulo.css">

    <?php 
$instrumento =[
    'nombre'=>$_POST['nombre'],
    'descripcion'=>$_POST['descripcion'],
    'link'=>$_POST['link'],
    'id_tipoInstrumento'=>$_POST['rol'],
];
$servidorDB = "localhost:3306";
$nombreDb = "tiendavirtual";
$usuarioDb = "root";
$passwordDB = "";

// Create connection
$conn = new mysqli($servidorDB, $usuarioDb,$passwordDB,$nombreDb );
$sql="insert into instrumento (nombre , descricion , link , id_tipoInstrumento )";
$sql.="values('".$instrumento['nombre'] ."','".$instrumento['descripcion'] ."','".$instrumento['link'] ."','".$instrumento['id_tipoInstrumento'] ."')";


$resultadoQuery= $conn->query($sql);

$conn->close();
?>
</head>
<body>
    <?php 
    if($resultadoQuery){
        echo '<div id="Instrumento Registrado">
        <label id="tit"> Registro exitoso</label>
        <br>
        <a id="btnLogin" href= "instrumentos.php">Ingresar</a>
        </div>';
    }else{
        echo '<p>presentó un error al guardar los datos. Vuelva a intentar</P>';
        echo '<br>'; 
        echo '<a href= "creacionDeArticulos.php">Volver</a>';
    }
    ?>
   
</body>
</html>