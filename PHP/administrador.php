
<?php 
include'../PHP/db.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
    <title>Administrador</title>
    <link rel="stylesheet" href="../CSS/listaUs.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <link rel="stylesheet" href="../CSS/menu.css">
    <link rel="shortcut icon" href="../resource/logo.jpg">
    <link rel="stylesheet" href="../style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
    <?php 
include '../HTML/menu.html';
?>
</head>
<body>

<h1 id="lista">LISTA DE USUARIOS</h1>
     <table>
        <thead>
            <tr>
                <th>Nombre Apellido</th>
                <th>Identificación</th>
                <th>Contraseña</th>
                <th>Usuario</th>
                <th>Rol</th>
                <th>Telefono</th>
                <th>Eliminar</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "select * from persona";
            $resultadoQuery = $conn->query($sql);
            if ($resultadoQuery->num_rows>0){
                while($row=$resultadoQuery->fetch_assoc()){
                    echo '<tr>';
                    echo '<td>'.$row['nombre'].' '.$row['apellido'].'</td>';
                    echo '<td>'.$row['identificacion'].'</td>';
                    echo '<td>'.$row['contraseña'].'</td>';
                    echo '<td>'.$row['usuario'].'</td>';
                    echo '<td>'.$row['rol'].'</td>';
                    echo '<td>'.$row['telefono'].'</td>';
                    echo '<td>';
                    echo '<a href="eliminar.php? identificacion='.$row['identificacion'].'">Eliminar</a>';
                    echo '</td>';
                    echo '</td>';
                }
              }else{
                  echo'<tr>';
                  echo'<td colspan="7">no hay registros</td>';
                  echo'</tr>';
              }
        ?>
             <tr>
            </tr>
        </tbody>
    </table>
  
    
</body>
</html>
<?php 
$conn->close();
?>