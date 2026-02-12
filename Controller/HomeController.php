<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/SC-502-Ambiente-Web-Cliente-Servidor/Model/HomeModel.php";

if(isset($_POST["btnRegistrar"])){

    $identificacion = $_POST["Identificacion"];
    $nombre = $_POST["Nombre"];
    $contrasenna = $_POST["Contrasenna"];
    
    $result = Registrar($identificacion, $nombre, $contrasenna);

    if($result)
        {
            header("Location: ../../View/vHome/login.php");
            exit;
        } else {
            $_POST["Mensaje"] = "Su información no fue registrada correctamente.";
        }
}

if(isset($_POST["btnIniciarSesion"])){

    $identificacion = $_POST["Identificacion"];
    $contrasenna = $_POST["Contrasenna"];
    
    $result = IniciarSesion($identificacion, $contrasenna);

    if($result)
        {
            header("Location: ../../View/vHome/inicio.php");
            exit;
        } else {
            $_POST["Mensaje"] = "Su información no fue autenticada correctamente.";
        }
}