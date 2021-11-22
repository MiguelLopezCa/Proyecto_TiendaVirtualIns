<!DOCTYPE html>
<html>

<head>

<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0,minimum-scale=1.0">  
    <link rel="shortcut icon" href="../resource/logo.jpg">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="../CSS/instrumentos.css">
    <link rel="stylesheet" href="../CSS/menu.css">
    <title>Instrumentos</title>
     <!-- Latest compiled and minified CSS -->
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src='../javaScript/instrumentos.js'></script>
</head>
<body>
    <header>
    <?php
    include "../HTML/menu.html";
    ?>
    </header>
    <div class="container">
      <center><h1>Instrumentos</h1></center>  
    </div>
         <br><br>
    
    <div class="container">
        <div class="row">
            <div class="col-xs-3">
             <h3 id="filtro">Filtrar por: </h3> <br>
             <button type="button" id="todos" class="btnFilt btn btn-primary">Mostrar Todos</button> <br><br>
                <button type="button" id="viento" class="btnFilt btn btn-primary">Viento</button> <br><br>
                <button type="button" id="percusion"  class="btnFilt btn btn-primary">Percusion</button><br><br>
                <button type="button" id="cuerda" class="btnFilt btn btn-primary">Cuerda</button><br><br>
            </div>

            <div class="col-xs-9">
            <div id="contenidoInstrumentos"></div>

            </div> 
        </div>

    </div>
</body>

</html>