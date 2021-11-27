<?php 
$id = empty($_GET['identificacion'])? null: $_GET['identificacion'];
$tituloForm = empty($id)?"Registrar":"Modificar";
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
    <link rel="shortcut icon" href="../resource/logo.jpg">
    <link rel="stylesheet" href="../css/ceracionUsuas.css">
</head>
<body style=" background-image: url(../resource/fondo1.jpg) ;">

    <h1 id="titulo"><?php echo $tituloForm; ?> </h1>
    </br>
   
    </br></br>
    <form class="formulario" id="formulario" action="<?php echo $actionForm;?>" method="POST">
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
    
        <div id="divCont">
		<form action="" class="formulario" id="formulario">	
		<div class="formulario__grupo divDatos" id="grupo__nombre">
            <label class="lblDatos" id="LblNombre" for="nombre"> Nombre</label>
		<div class="formulario__grupo-input">
			<input class="inpDatos formulario__input " id="nombre" name="nombre" type="text" value="<?php echo$persona['nombres'] ?>" placeholder="Ingrese su nombre" required />
			<i class="formulario__validacion-estado fas fa-times-circle"></i>
		</div> 
			<p class="formulario__input-error">El nombre tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			
		</div> 
        <div class="formulario__grupo divDatos" id="grupo__apellido">
            <label class="lblDatos" id="lblApellido" for="apellido"> Apellido</label>
        <div class="formulario__grupo-input">
			<input class="inpDatos formulario__input" id="apellido" name="apellido" type="text" value="<?php echo$persona['apellidos'] ?>" placeholder="Ingrese su apellido" required />
			<i class="formulario__validacion-estado fas fa-times-circle"></i>
			</div>
			<p class="formulario__input-error">El apellido tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			
		</div>
		<div class="formulario__grupo divDatos" id="grupo__identificacion">
            <label class="lblDatos" id="lblIden" for="ident"> Identificación </label>
		<div class="formulario__grupo-input">
			<input class="inpDatos formulario__input" id="identificacion" name="identificacion" type="number" value="<?php echo$persona['identificacion'] ?>" placeholder="Ingrese su Identificación" required/>
			<i class="formulario__validacion-estado fas fa-times-circle"></i>
		</div>
			<p class="formulario__input-error">La IDENTIFICACION tiene que ser de 8 a 10 dígitos.</p>         
        </div>
		<div class="formulario__grupo divDatos" id="grupo__password">
            <label class="lblDatos" id="contra" for="contraseña"> contraseña </label>
		<div class="formulario__grupo-input"> 
			<input class="inpDatos" id="contraseña" name="contraseña" type="password" value="<?php echo$persona['contraseña'] ?>" placeholder="Ingrese su contraseña" required />
			<i class="formulario__validacion-estado fas fa-times-circle"></i>
		</div>
			<p class="formulario__input-error">La IDENTIFICACION tiene que ser de 8 a 10 dígitos.</p>         
        </div>
		<div class="formulario__grupo divDatos" id="grupo__password2">
            <label class="lblDatos" id="contra1" for="contraseña1"> contraseña </label>
		<div class="formulario__grupo-input">   
			<input class="inpDatos" id="contraseña1" name="contraseña1" type="password"  value="<?php echo$persona['contraseña'] ?>" placeholder="Repita su contraseña" required/>
			<i class="formulario__validacion-estado fas fa-times-circle"></i>
		</div> 
			<p class="formulario__input-error">Ambas contraseñas deben ser iguales.</p>
		</div> 
		<div class="formulario__grupo divDatos" id="grupo__usuario">
       		 <label class="lblDatos" id="lblUsuario" for="usuario"> Usuario</label>
        <div class="formulario__grupo-input"> 
			<input class="inpDatos" id="usuario" name="usuario" type="text" value="<?php echo$persona['usuario'] ?>" placeholder="Ingrese su usuario" required />
			<i class="formulario__validacion-estado fas fa-times-circle"></i>	
		</div> 
		<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
		</div>              
        <div>
        <label class="lblDatos" id="lblRol" for="rol"> Rol del usuario</label>
        <select class="inpDatos" id="rol"  name="rol" required value="<?php echo$persona['rol'] ?>">
                 <option value="seleccione" selected>Seleccione  </option>
                <option value="cliente">Cliente  </option>
                <option value="administrador"> Administrador </option>
        </select>
        </div>

       <div class="formulario__grupo" id="grupo__telefono">
        <label class="inpDatos" id="tel" for="telefono"> Telefono </label>
        <div class="formulario__grupo-input"> 
		<input  class="inpDatos" id="telefono" name="telefono" type="number" value="<?php echo$persona['telefono'] ?>" placeholder="Ingrese su telefono" required />
		<i class="formulario__validacion-estado fas fa-times-circle"></i>
		</div>
		<p class="formulario__input-error">El telefono solo puede contener numeros y el maximo son 14 dígitos.</p>
			    
	</div>    
            
                     <button  id="btnGuardar" class="inpDatos btnCr"  name="submit" type="submit" >Guardar</button>
                    <button id="btnCancelar" class="inpDatos btnCr" type="reset">Cancelar</button>
                    <button id="btnRegresar" class="inpDatos btnCr" onclick="window.location.href='../PHP/login.php'" type="button">Regresar</button>
        
   
   
</div>
</form>
<script type="text/javascript" src="../javaScript/crearUsuario.js"></script>
</body>
 </html>