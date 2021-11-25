<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
    <style> 
    body{
        background-repeat: no-repeat;
        background-image: url(../resource/fondo1.jpg);
    }
    #usuarioCreado{
        position: absolute;
        width: 350px;
        height: 250px;
        border: solid 1; 
        opacity: 70%;
        background-color:white; 
        top: calc(50% - 125px);
        left: calc(50% - 175px);
        font-size: 30px;
        border-radius:  solid 3%;
        border-color: black;
    }
    #tit{
        position: absolute;
        width: 200px;
        left: calc( 50% - 100px);
    }
    #btnLogin{
        position: absolute;
        width: 100px;
        height: 50px;
        border: solid 1; 
        opacity: 50%;
        background-color:orange; 
        top: 70%;
        left: calc(50% - 50px);
        font-size: 30px;
        border-radius:  solid 3%;
        border-color: black;
        text-decoration: none;
    }
    #btnLogin:hover{
        opacity: 70%;
    }
    </style>

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
echo $sql;

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