function CerrarSesion() {
    $.ajax({
        url: '/SC-502-Ambiente-Web-Cliente-Servidor/Controller/HomeController.php',
        method: 'POST',
        dataType: 'json',
        data: { btnCerrarSesion: true },
        success: function (response) {
            window.location.href = '/SC-502-Ambiente-Web-Cliente-Servidor/View/vHome/login.php';
        }
    });
};
