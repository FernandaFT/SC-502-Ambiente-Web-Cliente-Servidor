function AgregarProductoCarrito(consecutivoProducto) {

    $.ajax({
        url: '/SC-502-Ambiente-Web-Cliente-Servidor/Controller/CarritoController.php',
        method: 'POST',
        dataType: 'json',
        data: { 
            btnAgregarProductoCarrito: true, 
            ConsecutivoProducto: consecutivoProducto 
        },
        success: function (response) {
            alert(response);
            window.location.href = '/SC-502-Ambiente-Web-Cliente-Servidor/View/vHome/inicio.php';
        }
    });

}