<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Instrumentos de cuerda</title>
    <link rel="stylesheet" href="../CSS/instrumentos.css">
    <link rel="shortcut icon" href="../resource/logo.jpg">
    <link rel="stylesheet" href="../style.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
</head>

<body>
<header>
        <div class="menu">
            <a href="#" class="bt-menu"></a>

            <nav>
                <ul>
                <li><a href="../PHP/inicio.php"><span class="icon-home"></span> Inicio</a></li>
                    <li><a href="../PHP/quienesSomos.php"><span class="icon-mic"></span> ¿Quienes somos?</a></li>
                    <li><a href="../PHP/instrumentosViento.php"><span class="icon-music"></span> Instrumentos</a></li>
                    <li><a href="../PHP/musicaYmas.php"><span class="icon-play"></span> Musica y más</a></li>
                    <li><a href="../PHP/contacto.php"><span class="icon-location"></span> Contacto</a></li>
                    <div class="busc"><input type=" text " placeholder="Buscador " id="buscador "></div>
                    <div class="imagenl "><img src="../resource/logo.png " width="150px " height="75px "></div>
                </ul>
            </nav>
            <div class="login"><a href="../PHP/login.php"><span class="icon-users"></span>Iniciar sesión o registrarse</a></div>

        </div>
    </header>
</br>
</br>
    <section>
        <aside id="izq"> 
        <button class="tiposInst" onclick="window.location.href='../PHP/instrumentosViento.php'">Instrumentos de viento</button>
        <br>
        <button class="tiposInst" onclick="window.location.href='../PHP/instrumentosPercusion.php'">Instrumentos de percusión</button>
        <br>
        <button class="tiposInst"onclick="window.location.href='../PHP/instrumentosCuerda.php'">Instrumentos de cuerda</button>
        <br>
        </aside>
        <aside id="articulos">
            <h1 id="titulo"> Instrumentos</h1>
            <div class="gridClass">

<div class="hijoClass colorRed"> 
<img src="../resource/guitalla.png " width="200px " height="150px ">
<label>Precio</label>
<label>$300.000</label>
</div>
<div class="hijoClass colorBlue">
<img src="../resource/guitalla.png " width="200px " height="150px ">
<label>Precio</label>
<label>$300.000</label>
</div>
<div class="hijoClass colorGreen">
<img src="../resource/guitalla.png " width="200px " height="150px ">
<label>Precio</label>
<label>$300.000</label>
</div>
<div class="hijoClass colorYellow">
<img src="../resource/guitalla.png " width="200px " height="150px ">
<label>Precio</label>
<label>$300.000</label>
</div>
<div class="hijoClass colorBlack">
<img src="../resource/guitalla.png " width="200px " height="150px ">
<label>Precio</label>
<label>$300.000</label>
</div>
<div class="hijoClass colorYellowGreen">
<img src="../resource/guitalla.png " width="200px " height="150px ">
<label>Precio</label>
<label>$300.000</label>
</div>
</div>
        </aside>
    </section>
    <footer>
        &copy; 2021 Derechos reservados
    </footer>
</body>

</html>