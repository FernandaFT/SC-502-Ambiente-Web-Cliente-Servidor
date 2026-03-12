<?php
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor/View/layout.php";
include_once $_SERVER["DOCUMENT_ROOT"] . "/SC-502-Ambiente-Web-Cliente-Servidor/Controller/SeguridadController.php";
?>

<!DOCTYPE html>
<html lang="en">

<?php
MostrarCSS();
?>

<body>

  <div id="preloader">
    <div class="spinner"></div>
  </div>

  <?php
  MostrarMenu();
  ?>

  <div class="overlay"></div>
  <main class="main-wrapper">

    <?php
    MostrarHeader();
    ?>

    <section class="section">
      <div class="container-fluid">
        <div class="title-wrapper pt-30">
          <div class="row align-items-center">
            <div class="col-md-7 mx-auto">
              <div class="card-style mt-5">

                <?php
                if (isset($_POST["Mensaje"])) {
                  echo
                  '<div class="alert alert-danger text-center" role="alert">
                      ' . $_POST["Mensaje"] . '
                  </div>';
                }
                ?>

                <h3 class="mb-15">Cambiar Contraseña</h3>

                <form action="" method="POST" id="formCambiarAcceso">
                  <div class="row">
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Nueva Contraseña</label>
                        <input type="password" placeholder="Nueva Contraseña"
                          id="NuevaContrasenna" name="NuevaContrasenna" />
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="input-style-1">
                        <label>Confirmar Contraseña</label>
                        <input type="password" placeholder="Confirmar Contraseña"
                          id="ConfirmarContrasenna" name="ConfirmarContrasenna" />
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="button-group d-flex justify-content-center flex-wrap">
                        <button type="submit" class="main-btn primary-btn btn-hover w-100 text-center"
                          id="btnCambiarAcceso" name="btnCambiarAcceso">
                          Procesar
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <?php
    MostrarFooter()
    ?>

  </main>

  <?php
  MostrarJS();
  ?>
  <script src="../assets/funciones/cambiarAcceso.js"></script>
</body>

</html>