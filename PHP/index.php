<?php 
$servidorDB = "localhost:3306";
$nombreDb = "estudiantes_db";
$usuarioDb = "root";
$passwordDB = "";

// Create connection
$conn = new mysqli($servidorDB, $usuarioDb,$passwordDB,$nombreDb );
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Estudiantes</title>
</head>
<body>
    
    <h1>lista de Estudiantes</h1>
    <a href="form_estudiantes.php">Registrar nuevo estudiante</a>
    <table>
        <thead>
            <tr>
                <th>Código</th>
                <th>Estudiantes</th>
                <th>Edad</th>
                <th>Modificar</th>
                <th>Eliminar</th>
                
            </tr>
        </thead>
        <tbody>
        <?php
            $sql = "select * from estudiante";
            $resultadoQuery = $conn->query($sql);
            if ($resultadoQuery->num_rows>0){
                while($row=$resultadoQuery->fetch_assoc()){
                    echo '<tr>';
                    echo '<td>'.$row['codigo'].'</td>';
                    echo '<td>'.$row['nombre'].''.$row['apellido'].'</td>';
                    echo '<td>'.$row['edad'].'</td>';
                    echo '<td>';
                    echo '<a href="form_estudiantes.php?idE='.$row['id'].' ">Modificar</a>';
                    echo '</td>';
                    echo '<td>';
                    echo '<a href="eliminar.php?
                    idE='.$row['id'].'">Eliminar</a>';
                    echo '</td>';
                    echo '</td>';
                }
              }else{
                  echo'<tr>';
                  echo'<td colspan="3">no hay registros</td>';
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