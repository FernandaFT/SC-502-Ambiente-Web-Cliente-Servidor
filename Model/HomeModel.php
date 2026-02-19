<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/SC-502-Ambiente-Web-Cliente-Servidor/Model/UtilitarioModel.php";

function RegistrarModel($identificacion, $nombre, $contrasenna,$correoElectronico)
{
    //Paso 1. Abrir la BD
    $context = OpenDataBase();

    //´Paso 2. Ejecutar la sentencia
    $sp = "CALL spRegistrar('$identificacion', '$nombre', '$contrasenna', '$correoElectronico')";
    $result = $context -> query($sp);

    //Paso 3. Cerrar la BD
    CloseDataBase($context);
    return $result;
};

function IniciarSesionModel($correoElectronico, $contrasenna)
{
    //Paso 1. Abrir la BD
    $context = OpenDataBase();

    //´Paso 2. Ejecutar la sentencia
    $sp = "CALL spIniciarSesion('$correoElectronico', '$contrasenna')";
    $result = $context -> query($sp);

    $datos = null;
    while($fila = $result -> fetch_assoc())
    {
         $datos = $fila;
    }

    //Paso 3. Cerrar la BD
    CloseDataBase($context);
    return $datos;
};