$(document).ready(function() {






    cargarTodos("");



    $("#todos").click(function() {
        $("#contenidoInstrumentos").html("");


        cargarTodos("");
    })

    $("#viento").click(function() {

        var cargarTodos = "cargar";

        var objData = new FormData();

        objData.append("viento", cargarTodos);

        $.ajax({
            url: "../control/instrumentosControl.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {

                cargarContenido(respuesta);


            }
        })








    })

    function cargarTodos(idBuscarDescripcion) {

        var cargarTodos = "cargar";

        var objData = new FormData();

        objData.append("cargarTodos", cargarTodos);

        $.ajax({
            url: "../control/instrumentosControl.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {



                if (idBuscarDescripcion != null) {
                    $("#descripcionModal").html("");
                    respuesta.forEach(buscarDescripcion);


                    function buscarDescripcion(item, index) {


                        if (Number(idBuscarDescripcion) == respuesta[index][0]) {
                            $("#descripcionModal").append('<br><h4>' + item.descricion + '</h4>');

                        }

                    }

                }

                var concatenar = "";

                var categoriaAnterior = 0;
                var contador = 0;


                datosInstrumento = respuesta;

                console.log(respuesta);

                respuesta.forEach(cargarContenido);

                function cargarContenido(item, index) {

                    var categoriaActual = item.id;

                    if (contador == 0) {
                        categoriaAnterior = item.id;

                        concatenar += '<h3>' + item.descripcion + '</h3>';

                        concatenar += '<div class="row">';
                        // contador++;
                    }
                    if (categoriaActual != categoriaAnterior) {

                        concatenar += '</div> <br><br>';
                        concatenar += '<h3>' + item.descripcion + '</h3>';
                        concatenar += '<div class="row">';
                        contador = 0;
                        categoriaAnterior = item.id;


                    }
                    if (contador != 3 && categoriaActual == categoriaAnterior) {
                        ret();
                    } else if (contador == 3) {
                        concatenar += '</div><br><br>';
                        concatenar += '<div class="row">';

                        ret();
                        contador = 0;
                    }
                    contador++;

                    function ret() {

                        var valordescripcion = item.descricion;
                        concatenar += '<div class="col-xs-3">';
                        concatenar += '<div class="card" style="width: 18rem;">';
                        concatenar += '<img src=' + item.link + ' class="card-img-top" alt="...">';
                        concatenar += ' <div class="card-body">';
                        concatenar += '<h5 class="card-title">' + item.nombre + '</h5>';
                        concatenar += '<p class="card-text">' + item.descricion + '</p>';
                        concatenar += '<a href="#" class="btn btn-primary" id="mostrarInstrumento" imagen=' + item.link + ' descripcion=' + valordescripcion + ' nombre=' + item.nombre + ' tipo=' + item.descripcion + ' idInstrumento=' + respuesta[index][0] + '> Descripción </a>';
                        concatenar += ' </div>';
                        concatenar += '</div>';

                        concatenar += '</div>';

                    }
                }
                $("#contenidoInstrumentos").html(concatenar);

                console.log(concatenar);
            }
        })
    }

    $("#percusion").click(function() {

        var cargarTodos = "cargar";

        var objData = new FormData();

        objData.append("percusion", cargarTodos);

        $.ajax({
            url: "../control/instrumentosControl.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {

                cargarContenido(respuesta);
            }
        })
    })

    $("#cuerda").click(function() {

        var cargarTodos = "cargar";

        var objData = new FormData();

        objData.append("cuerda", cargarTodos);

        $.ajax({
            url: "../control/instrumentosControl.php",
            type: "post",
            dataType: "json",
            data: objData,
            cache: false,
            contentType: false,
            processData: false,
            success: function(respuesta) {

                cargarContenido(respuesta);
            }
        })
    })

    function cargarContenido(datos, idBuscarDescripcion) {

        var concatenar = "";
        var contador = 0;

        if (idBuscarDescripcion != null) {
            $("#descripcionModal").html("");
            respuesta.forEach(buscarDescripcion);


            function buscarDescripcion(item, index) {


                if (Number(idBuscarDescripcion) == respuesta[index][0]) {
                    $("#descripcionModal").append('<br><h4>' + item.descricion + '</h4>');

                }

            }

        }

        datos.forEach(cargarDatosIns);

        function cargarDatosIns(item, index) {

            if (idBuscarDescripcion != null) {
                $("#descripcionModal").html("");
                datos.forEach(buscarDescripcion);


                function buscarDescripcion(item, index) {


                    if (Number(idBuscarDescripcion) == datos[index][0]) {
                        $("#descripcionModal").append('<br><h4>' + item.descricion + '</h4>');

                    }

                }

            }

            if (contador == 0) {
                concatenar += '<br><br>';
                concatenar += '<div class="row">';

            }

            if (contador != 3) {
                ret();

            } else if (contador == 3) {
                concatenar += '</div><br><br>';
                concatenar += '<div class="row">';
                ret();
                contador = 0;

            }
            contador++;

            function ret() {
                concatenar += '<div class="col-xs-3">';
                concatenar += '<div class="card" style="width: 18rem;">';
                concatenar += '<img src=' + item.link + ' class="card-img-top" alt="...">';
                concatenar += ' <div class="card-body">';
                concatenar += '<h5 class="card-title">' + item.nombre + '</h5>';
                concatenar += '<p class="card-text">' + item.descricion + '</p>';
                concatenar += '<a href="#" class="btn btn-primary" id="mostrarInstrumento" imagen=' + item.link + ' descripcion=' + item.descricion + ' nombre=' + item.nombre + ' tipo=' + item.descripcion + ' idInstrumento=' + datos[index][0] + '> Descripción </a>';
                concatenar += ' </div>';
                concatenar += '</div>';

                concatenar += '</div>';

            }
        }

        $("#contenidoInstrumentos").html("");
        $("#contenidoInstrumentos").html(concatenar);


    }

    $("#contenidoInstrumentos").on("click", "#mostrarInstrumento", function() {


        var imagen = $(this).attr("imagen");
        var nombre = $(this).attr("nombre");
        var tipo = $(this).attr("tipo");
        var descripcion = $(this).attr("descripcion");
        var id = $(this).attr("idInstrumento");
        cargarTodos(id);

        var concatenar = "";

        //concatenar += '<div class ="carousel-item active">';
        concatenar += '<img class ="d-block w-100" src=' + imagen + ' alt ="First slide" >';
        //concatenar += ' </div>';
        $("#imagenInstrumentoModal").html(concatenar);


        $("#tipoInstrumento").html('<br><h4>' + tipo + '</h4>')

        $("#instrumentosModal").modal('toggle');












    })

    $("#cerrarModal").click(function() {
        $("#instrumentosModal").modal('toggle');


    });
















})