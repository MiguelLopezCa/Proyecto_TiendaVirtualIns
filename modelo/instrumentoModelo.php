<?php

require "conexion.php";

class instrumentosModelo{

public static function cargarTodos(){

    $objConsulta =conexion::conectar()->prepare("SELECT instrumento.id as idInstrumento,instrumento.descricion,instrumento.link,tipoinstrumento.descripcion FROM instrumento INNER JOIN tipoinstrumento on instrumento.id_tipoInstrumento = tipoinstrumento.id ORDER BY tipoinstrumento.id;");
    $objConsulta->execute();
    $lista=$objConsulta->fetchAll();
    return $lista;
}

public static function mdlCuerda(){

    $objConsulta =conexion::conectar()->prepare("SELECT instrumento.id as idInstrumento,instrumento.descricion,instrumento.link,tipoinstrumento.descripcion  FROM instrumento INNER JOIN tipoinstrumento on instrumento.id_tipoInstrumento = tipoinstrumento.id WHERE descripcion='Cuerda'");
    $objConsulta->execute();
    $lista=$objConsulta->fetchAll();

    return $lista;
}

public static function mdlViento(){

    $objConsulta =conexion::conectar()->prepare("SELECT instrumento.id as idInstrumento,instrumento.descricion,instrumento.link,tipoinstrumento.descripcion FROM instrumento INNER JOIN tipoinstrumento on instrumento.id_tipoInstrumento = tipoinstrumento.id WHERE descripcion='Viento'");
    $objConsulta->execute();
    $lista=$objConsulta->fetchAll();

    return $lista;
}

public static function mdlPercusion(){

    $objConsulta =conexion::conectar()->prepare("SELECT instrumento.id as idInstrumento,instrumento.descricion,instrumento.link,tipoinstrumento.descripcion FROM instrumento INNER JOIN tipoinstrumento on instrumento.id_tipoInstrumento = tipoinstrumento.id WHERE descripcion='Percusion'");
    $objConsulta->execute();
    $lista=$objConsulta->fetchAll();

    return $lista;
}




}