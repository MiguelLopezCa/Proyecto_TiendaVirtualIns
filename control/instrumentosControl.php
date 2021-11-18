<?php
include_once "../modelo/instrumentosModelo.php";


class instrumentosControl{

    public function ctrlCargarTodos(){

        $objRespuesta=instrumentosModelo::cargarTodos();
        echo json_encode($objRespuesta);



    }

    public function ctrlViento(){

        $objRespuesta=instrumentosModelo::mdlViento();
        echo json_encode($objRespuesta);



    }

    public function ctrlCuerda(){

        $objRespuesta=instrumentosModelo::mdlCuerda();
        echo json_encode($objRespuesta);



    }

    public function ctrlPercusion(){

        $objRespuesta=instrumentosModelo::mdlPercusion();
        echo json_encode($objRespuesta);



    }



}
$objConsultaInstrumento = new instrumentosControl();


if(isset($_POST["cargarTodos"])){

    $objConsultaInstrumento->ctrlCargarTodos();




}

if(isset($_POST["cuerda"])){

    $objConsultaInstrumento->ctrlCuerda();




}

if(isset($_POST["viento"])){

    $objConsultaInstrumento->ctrlViento();




}

if(isset($_POST["percusion"])){

    $objConsultaInstrumento->ctrlPercusion();




}