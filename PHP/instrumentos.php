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
    <script src='../javaScript/instrumentoss.js'></script>
</head>

<body>
    <header>
        <?php
        include "../HTML/menu.html";
        ?>
    <link rel="shortcut icon" href="../resource/logo.jpg">

    </header>
    <div class="container">
        <center>
            <h1>Instrumentos</h1>
        </center>
    </div>

    <div class="container">
        <div class="row">
            <div id="izq" class="col-xs-3">
                <h3 id="filtro">Filtrar por: </h3>
                <button type="button" id="todos" class="btnFilt btn btn-primary">Mostrar Todos</button> <br><br>
                <button type="button" id="viento" class="btnFilt btn btn-primary">Viento</button> <br><br>
                <button type="button" id="percusion" class="btnFilt btn btn-primary">Percusion</button><br><br>
                <button type="button" id="cuerda" class="btnFilt btn btn-primary">Cuerda</button><br><br>
            </div>
            <div id="der" class="col-xs-9">
                <div id="contenidoInstrumentos"></div>

            </div>
        </div>

    </div>

    <div class="modal fade" id="instrumentosModal" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Informacion Instrumento</h5>


                </div>
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">

                        <div class="container">
                        <div id="imagenInstrumentoModal"></div>

                        </div>

                            



                        </div>
                        <div class="col-lg-6">
                            <h3>Descripcion:</h3> <br>
                            <div id="descripcionModal"></div>
                            <br>
                            <h3>Tipo Instrumento:</h3> <br>
                            <div id="tipoInstrumento"></div>


                        </div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" id="cerrarModal" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>

                </div>
            </div>
        </div>
    </div>



</body>

</html>