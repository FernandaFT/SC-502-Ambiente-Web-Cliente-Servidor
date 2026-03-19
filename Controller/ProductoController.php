<?php
include_once $_SERVER["DOCUMENT_ROOT"]."/SC-502-Ambiente-Web-Cliente-Servidor/Controller/UtilitarioController.php";
include_once $_SERVER["DOCUMENT_ROOT"]."/SC-502-Ambiente-Web-Cliente-Servidor/Model/ProductoModel.php";


if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

function ConsultarProductos()
{
    return ConsultarProductosModel();
}

if (isset($_POST["btnCambiarEstado"])) {

    $consecutivoProducto = $_POST["Consecutivo"];

    // $result = RegistrarModel($identificacion, $nombre, $contrasenna, $correoElectronico);

    // if ($result) {
    //     header("Location: ../../Views/vHome/login.php");
    //     exit;
    // } else {
    //     $_POST["Mensaje"] = "Su información no fue registrada correctamente";
    // }
}
