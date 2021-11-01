<?php 
$id = empty($_GET['idE'])? null: $_GET['idE'];
$tituloForm = empty($id)?"Registrar":"Modificar";
$actionForm = empty($id)?"registrar.php":"actualizar.php";
$estudiante =[
    'codigo'=>'',
    'nombres'=>'',
    'apellidos'=>'',
    'edad'=>16,
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estudiantes</title>
</head>
<body>
    <h1><?php echo $tituloForm; ?> </h1>
    </br>
    <a href="index.php">Volver</a>
    </br></br>
    <form action="<?php echo $actionForm;?>" method="POST">
    <?php
    if (!empty($id)){
        $servidorDB = "localhost:3306";
        $nombreDb = "estudiantes_db";
        $usuarioDb = "root";
        $passwordDB = "";
        // Create connection
        $conn = new mysqli($servidorDB, $usuarioDb,$passwordDB,$nombreDb );
        $sql = "SELECT * FROM estudiante WHERE id=".$id;
        $resultadoQuery= $conn->query($sql);
        if($resultadoQuery->num_rows>0){
            while($row= $resultadoQuery->fetch_assoc()){
                $estudiante['codigo']=$row['codigo'];
                $estudiante['nombres']=$row['nombre'];
                $estudiante['apellidos']=$row['apellido'];
                $estudiante['edad']=$row['edad'];
            }
        }

        $conn->close();
        echo '<input id= "idInput" name="idInput" type="hidden" value="'.$id.'">';
    }

    ?>  
    <div>
            <label for="codigoInput">Código</label>
            <input id="codigoInput" name="codigoInput" type="text" value="<?php echo$estudiante['codigo'] ?>" required>
        </div>
        <div>
            <label for="nombresInput">Nombre:</label>
            <input id="nombresInput" name="nombresInput" type="text"  value="<?php echo$estudiante['nombres'] ?>"required>
        </div>
        <div>
            <label for="apellidosInput">Apellidos:</label>
            <input id="apellidosInput" name="apellidosInput" type="text" value="<?php echo$estudiante['apellidos'] ?>" required>
        </div>
        
        <div>
            <label for="edadInput">Edad:</label>
            <input id="edadInput" name="edadInput" type="number" min="16" value="<?php echo$estudiante['edad'] ?>" required>
        </div>
        <div>
            <button type="submit">Guardar</button>
        </div>
    </form>
</body>
</html>