<?php 
$servidorDB = "localhost:3306";
$nombreDb = "tiendavirtual";
$usuarioDb = "root";
$passwordDB = "";

// Create connection
$conn = new mysqli($servidorDB, $usuarioDb,$passwordDB,$nombreDb );
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title> usuarios</title>
</head>
<body>
    
    <h1>lista de Estudiantes</h1>
    <a href="creacionUsuario.php">Registrar nuevo usuario</a>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Identificación</th>
                <th>Contraseña</th>
                <th>Usuario</th>
                <th>Rol</th>
                <th>Telefono</th>
                <th>Modificar</th>
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
                    echo '<td>'.$row['nombre'].''.$row['apellido'].'</td>';
                    echo '<td>'.$row['identificacion'].'</td>';
                    echo '<td>'.$row['contraseña'].'</td>';
                    echo '<td>'.$row['usuario'].'</td>';
                    echo '<td>'.$row['rol'].'</td>';
                    echo '<td>'.$row['telefono'].'</td>';
                    echo '<td>';
                    echo '<a href="creacionUsuaio.php?idE='.$row['identificacion'].' ">Modificar</a>';
                    echo '</td>';
                    echo '<td>';
                    echo '<a href="eliminar.php?idE='.$row['identificacion'].'">Eliminar</a>';
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