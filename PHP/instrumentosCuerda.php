<?php 
include '../HTML/menu.html';
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Instrumentos de cuerda</title>
    <link rel="stylesheet" href="../CSS/instrumentos.css">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">
</head>

<body>
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