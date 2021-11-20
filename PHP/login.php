<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8" />
    <title>Ingresar al sistema</title>
    <link rel="shortcut icon" href="../resource/logo.jpg">
    <link rel="stylesheet" href="../css/loginS.css">
</head>
<body>
    <div id="conten">
        <form action="validar.php" method="post">
            <h1 id="titulo">Iniciar sesión</h1>
            <input id="usuario" name="usuario" type="text"  class="inpDatos"  placeholder="Ingrese su Usuario" required >
            <input type="password"  class="inpDatos" id="contraseña" name="contraseña" placeholder="Ingrese su contraseña" required >
            <input id="btnIngresar" class="inpDatos cre" type="submit" value="Ingresar">
             <select class="inpDatos" id="rol"  name="rol" required>
                <option value="cliente" selected>Cliente  </option>
                <option value="administrador"> Administrador </option>
             </select>

            <button id="btnRegistrar" class="inpDatos cre " onclick="window.location.href='../PHP/creacionUsuario.php'" type="submit">REGISTRARSE</button>
        </form>
    </div>
</body>
</html>