<?php 
$ide = empty($_GET['ide'])? null: $_GET['ide'];
$tituloForm = empty($ide)?"Registrar Articulo":"Modificar";
$actionForm = empty($ide)?"registrarArticulo.php":"actualizar.php";
$instrumento =[
    'ide'=>'',
    'nombre'=>'',
    'descripcion'=>'',
    'link'=>'',
    'id_tipoInstrumento',
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Agregar instrumento</title>
    <link rel="stylesheet" href="../css/creacionDeArticulos.css">
</head>
<body style=" background-image: url(../resource/fondo1.jpg) ;">

    <h1 id="titulo"><?php echo $tituloForm; ?> </h1>
    </br>
   
    </br></br>
    <form action="<?php echo $actionForm;?>" method="POST">
    <?php
    if (!empty($ide)){
        $servidorDB = "localhost:3306";
        $nombreDb = "tiendavirtual";
        $usuarioDb = "root";
        $passwordDB = "";
        // Create connection
        $conn = new mysqli($servidorDB, $usuarioDb,$passwordDB,$nombreDb );
        $sql = "SELECT * FROM instrumento WHERE ide=".$ide;
        $resultadoQuery= $conn->query($sql);
        if($resultadoQuery->num_rows>0){
            while($row= $resultadoQuery->fetch_assoc()){
                $instrumento['ide']=$row['ide'];
                $instrumento['nombre']=$row['nombre'];
                $instrumento['descripcion']=$row['descripcion'];
                $instrumento['link']=$row['link'];
                $instrumento['id_tipoInstrumento']=$row['id_tipoInstrumento'];

            }
        }

        $conn->close();
        echo '<input id= "idInput" name="idInput" type="hidden" value="'.$id.'">';
    }

    ?>  
    <form >
        <div id="divCont">
         
        <div>
            <label class="lblDatos" id="lblNombre" for="nombre"> Nombre</label>
            <input class="inpDatos" id="nombre" name="nombre" type="text" value="<?php echo$instrumento['nombre'] ?>" placeholder="Ingrese el nombre del instrumento" required />
        </div>
        <div>
            <label class="lblDatos" id="lblDescr" for="descripcion"> Descripción </label>
            <input class="inpDatos" id="descripcion" name="descripcion" type="text" value="<?php echo$instrumento['descripcion'] ?>" placeholder="Ingresela descripcion" required/>
                        
        </div>
       
        <div>
        <label class="lblDatos" id="lblLink" for="link"> Link</label>
        <input class="inpDatos" id="link" name="link" type="text" value="<?php echo$instrumento['link'] ?>" placeholder="Ingrese el link de la ubucacion de la foto" required />
        </div>              
        <div>
        <label class="lblDatos" id="lblRol" for="rol"> Tipo de instrumento</label>
        <select class="inpDatos" id="rol"  name="rol" required value="<?php echo$instrumento['id_tipoInstrumento'] ?>">
                 <option value="seleccione" selected>Seleccione  </option>
                <option value="1">Viento  </option>
                <option value="2"> Cuerda </option>
                <option value="3">Percusión  </option>
        </select>
        </div>                    
           
            
            <button  id="btnGuardar" class="inpDatos btnCr"  type="submit" onclick="onclickGuardar()" >Guardar</button>
                    <button id="btnCancelar" class="inpDatos btnCr" type="reset">Cancelar</button>
                    <button id="btnRegresar" class="inpDatos btnCr" onclick="window.location.href='../PHP/administrador.php'" type="button">Regresar</button>
                   
    </form>
   
</div>
</body>
 </html>