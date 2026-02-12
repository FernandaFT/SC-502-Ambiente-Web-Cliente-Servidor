<?php

function RegistrarModel($identificacion, $nombre, $contrasenna)
{
    //Paso 1. Abrir la BD
    $context = mysqli_connect("127.0.0.1","root","","mn_db");

    //´Paso 2. Ejecutar la sentencia
    $sp = "CALL spRegistrar('$identificacion', '$nombre', '$contrasenna')";
    $result = $context -> query($sp);

    //Paso 3. Cerrar la BD
    mysqli_close($context);
    return $result;
};

function IniciarSesionModel($identificacion, $contrasenna)
{
    //Paso 1. Abrir la BD
    $context = mysqli_connect("127.0.0.1","root","","mn_db");

    //´Paso 2. Ejecutar la sentencia
    $sp = "CALL spIniciarSesion('$identificacion', '$contrasenna')";
    $result = $context -> query($sp);

    //Paso 3. Cerrar la BD
    mysqli_close($context);
    return $result;
};