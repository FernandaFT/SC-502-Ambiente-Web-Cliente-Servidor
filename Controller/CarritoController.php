<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor/Model/CarritoModel.php";

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if(isset($_POST["btnAgregarProductoCarrito"])) {
     
    $consecutivoProducto = $_POST["ConsecutivoProducto"];
    $consecutivoUsuario = $_SESSION["Consecutivo"];
    $cantidad = 1;

    $result = AgregarProductoCarritoModel($consecutivoProducto, $consecutivoUsuario, $cantidad);

    if ($result) {
        ConsultarResumenCarrito();
        echo json_encode("Producto agregado al carrito correctamente");
    } else {
        echo json_encode("Error al agregar el producto al carrito");
    }

}

if(isset($_POST["btnPagar"])) {
     
    $consecutivoUsuario = $_SESSION["Consecutivo"];

    $result = PagarCarritoModel($consecutivoUsuario);

    if ($result) {
        ConsultarResumenCarrito();
        header("Location: ../../View/vFactura/consultarFacturas.php");
        exit;
    } else {
        $_POST["Mensaje"] = "El carrito no fue cancelado correctamente";
    }
}

if(isset($_POST["btnRemoverProductoCarrito"])){
    $consecutivoCarrito = $_POST["Consecutivo"];

    $result = RemoverProductoCarritoModel($consecutivoCarrito);

    if ($result) {
        ConsultarResumenCarrito();
        header("Location: ../../View/vCarrito/consultarCarrito.php");
        exit;
    } else {
        $_POST["Mensaje"] = "El producto no fue removido correctamente";
    }
}

if(isset($_POST["btnRemoverProductoCarrito"])){
    $consecutivoCarrito = $_POST["Consecutivo"];

    $result = RemoverProductoCarritoModel($consecutivoCarrito);

    if ($result) {
        ConsultarResumenCarrito();
        header("Location: ../../View/vCarrito/consultarCarrito.php");
        exit;
    } else {
        $_POST["Mensaje"] = "El producto no fue removido correctamente";
    }
}

function ConsultarCarrito()
{
    $consecutivoUsuario = $_SESSION["Consecutivo"];
    return ConsultarCarritoModel($consecutivoUsuario);
}

function ConsultarResumenCarrito()
{
    $consecutivoUsuario = $_SESSION["Consecutivo"];
    $result = ConsultarResumenCarritoModel($consecutivoUsuario);

    $_SESSION["TotalCantidad"] = $result["TotalCantidad"];
    $_SESSION["TotalPago"] = $result["TotalPago"];
}

function ConsultarFacturas()
{
    $consecutivoUsuario = $_SESSION["Consecutivo"];
    return ConsultarFacturasModel($consecutivoUsuario);
}

function ConsultarDetallesFactura($consecutivoFactura)
{
    return ConsultarDetallesFacturaModel($consecutivoFactura);
}

function ConsultarDatos()
{
    return ConsultarDatosModel();
}