<?php 
$id = empty($_GET['idE'])? null: $_GET['idE'];
$tituloForm = empty($id)?"Registrar Articulo":"Modificar";
$actionForm = empty($id)?"registrar.php":"actualizar.php";
$persona =[
    'nombres'=>'',
    'apellidos'=>'',
    'identificacion'=>'',
    'contraseña'=>'',
    'usuario'=>'',
    'rol'=>'',
    'telefono'=>'',
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Crear usuario</title>
    <link rel="stylesheet" href="../css/creacionDeArticulos.css">
</head>
<body style=" background-image: url(../resource/fondo1.jpg) ;">

    <h1 id="titulo"><?php echo $tituloForm; ?> </h1>
    </br>
   
    </br></br>
    <form action="<?php echo $actionForm;?>" method="POST">
    <?php
    if (!empty($identificacion)){
        $servidorDB = "localhost:3306";
        $nombreDb = "tiendavirtual";
        $usuarioDb = "root";
        $passwordDB = "";
        // Create connection
        $conn = new mysqli($servidorDB, $usuarioDb,$passwordDB,$nombreDb );
        $sql = "SELECT * FROM persona WHERE identificacion=".$identificacion;
        $resultadoQuery= $conn->query($sql);
        if($resultadoQuery->num_rows>0){
            while($row= $resultadoQuery->fetch_assoc()){
                $persona['nombres']=$row['nombre'];
                $persona['apellidos']=$row['apellido'];
                $persona['identificacion']=$row['identificacion'];
                $persona['contraseña']=$row['contraseña'];
                $persona['usuario']=$row['usuario'];
                $persona['rol']=$row['rol'];
                $persona['telefono']=$row['telefono'];

            }
        }

        $conn->close();
        echo '<input id= "idInput" name="idInput" type="hidden" value="'.$identificacion.'">';
    }

    ?>  
    <form >
        <div id="divCont">
        <div>
            <label class="lblDatos" id="LblNombre" for="nombre"> Nombre</label>
            <input class="inpDatos" id="nombre" name="nombre" type="text" value="<?php echo$persona['nombres'] ?>" placeholder="Ingrese su nombre" required />
        </div> 
        <div>
            <label class="lblDatos" id="lblApellido" for="apellido"> Apellido</label>
            <input class="inpDatos" id="apellido" name="apellido" type="text" value="<?php echo$persona['apellidos'] ?>" placeholder="Ingrese su apellido" required />
        </div>
        <div>
            <label class="lblDatos" id="lblIden" for="ident"> Identificación </label>
            <input class="inpDatos" id="identificacion" name="identificacion" type="number" value="<?php echo$persona['identificacion'] ?>" placeholder="Ingrese su Identificación" required/>
                        
        </div>
        <div>
            <label class="lblDatos" id="contra" for="contraseña"> contraseña </label>
            <input class="inpDatos" id="contraseña" name="contraseña" type="password" value="<?php echo$persona['contraseña'] ?>" placeholder="Ingrese su contraseña" required />
        </div>
        <div>
            <label class="lblDatos" id="contra1" for="contraseña1"> contraseña </label>
            <input class="inpDatos" id="contraseña1" name="contraseña1" type="password" value="<?php echo$persona['contraseña'] ?>" placeholder="Repita su contraseña" required/>
        </div> 
        <div>
        <label class="lblDatos" id="lblUsuario" for="usuario"> Usuario</label>
        <input class="inpDatos" id="usuario" name="usuario" type="text" value="<?php echo$persona['usuario'] ?>" placeholder="Ingrese su usuario" required />
        </div>              
        <div>
        <label class="lblDatos" id="lblRol" for="rol"> Rol del usuario</label>
        <select class="inpDatos" id="rol"  name="rol" required value="<?php echo$persona['rol'] ?>">
                 <option value="seleccione" selected>Seleccione  </option>
                <option value="cliente">Cliente  </option>
                <option value="administrador"> Administrador </option>
        </select>
        </div>                    
        <div>
        <label class="inpDatos" id="tel" for="telefono"> Telefono </label>
        <input  class="inpDatos" id="telefono" name="telefono" type="number" value="<?php echo$persona['telefono'] ?>" placeholder="Ingrese su telefono" required />
        </div>    
            
            <button  id="btnGuardar" class="inpDatos btnCr"  type="submit" onclick="onclickGuardar()" >Guardar</button>
                    <button id="btnCancelar" class="inpDatos btnCr" type="reset">Cancelar</button>
                    <button id="btnRegresar" class="inpDatos btnCr" onclick="window.location.href='../PHP/login.php'" type="button">Regresar</button>
                   
    </form>
   
</div>
<script type="text/javascript" src="../javaScript/crearUsuario.js"></script>
</body>
 </html>