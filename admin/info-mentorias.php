<?php
// Inicia la sesión
session_start();

// Verifica si la variable de sesión "user_id" está seteada, lo que indica que el usuario está autenticado
if (!isset($_SESSION['user_id'])) {
    // Si no está autenticado, redirige a la página de inicio de sesión
    header("Location: login.php");
    exit();
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ADMIN NXTEP</title>
  <link rel="shortcut icon" type="image/png" href="assets/images/logos/favicon.png" />
  <link rel="stylesheet" href="assets/css/styles.min.css" />
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">
</head>
<style>
  #responseMessage{

  }
  #responseMessage p{
    border-radius: 10px;
    background-color: green;
    color: #ffffff;
    padding: 10px;
    margin: 20px 0px 0px;
  }
  #responseMessages p{
    border-radius: 10px;
    background-color: green;
    color: #ffffff;
    padding: 10px;
    margin: 20px 0px 0px;
  }
</style>
<body>
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <?php include 'aside.php'; ?>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <?php include 'header.php'; ?>
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
          <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="align-items-center justify-content-between mb-9">
                  <div class="mb-4">
                    <h5 class="card-title fw-semibold">¿Cuándo debería tomar una mentoría en NXTEP?</h5>
                  </div>
                  <form id="editForm">
                    <div class="row">
                    <?php
                        // Debes obtener la información de la base de datos y llenar los campos aquí
                        include 'dbs.php';

                        // Obtener la información de la tabla tbl_infos
                        $ids = [1, 2, 3, 4];
                        $idString = implode(',', $ids);

                        $result = $conn->query("SELECT * FROM tbl_infos WHERE id IN ($idString)");
                        if ($result->num_rows > 0) {
                            while ($row = $result->fetch_assoc()) {
                      ?>
                              <div class="mb-3 col-lg-6">
                                <label for="info<?php echo $row['id']; ?>" class="form-label"><?php echo $row['titulo']; ?></label>
                                <textarea class="form-control" id="info<?php echo $row['id']; ?>" name="info<?php echo $row['id']; ?>" rows="3"><?php echo $row['contenido']; ?></textarea>
                              </div>
                      <?php
                            }
                        } else {
                            echo "No se encontraron registros en tbl_infos";
                        }
                        
                      ?>
                    </div>

                    <button type="button" class="btn w-100 py-2 btn-primary" onclick="guardarCambios()">Guardar Cambios</button>
                  </form>
                  <div id="responseMessage"></div>
                 
                </div>
                 
              </div>
            </div>
          </div>


          <div class="col-lg-12 d-flex align-items-strech">
            <div class="card w-100">
              <div class="card-body">
                <div class="align-items-center justify-content-between mb-9">
                  <div class="mb-4">
                    <h5 class="card-title fw-semibold">Proceso para recibir mi mentoría</h5>
                  </div>
                  <form id="editForms">
                    <div class="row">
                    <?php
                        $ids2 = [5, 6, 7, 8];
                        $idString2 = implode(',', $ids2);

                        $result2 = $conn->query("SELECT * FROM tbl_infos WHERE id IN ($idString2)");
                        if ($result2->num_rows > 0) {
                            while ($row2 = $result2->fetch_assoc()) {
                      ?>
                              <div class="mb-3 col-lg-6">
                                <label for="info<?php echo $row2['id']; ?>" class="form-label"><?php echo $row2['titulo']; ?></label>
                                <textarea class="form-control" id="info<?php echo $row2['id']; ?>" name="info<?php echo $row2['id']; ?>" rows="3"><?php echo $row2['contenido']; ?></textarea>
                              </div>
                      <?php
                            }
                        } else {
                            echo "No se encontraron registros en tbl_infos";
                        }
                        $conn->close();
                      ?>
                    </div>

                    <button type="button" class="btn w-100 py-2 btn-primary" onclick="guardarCambios2()">Guardar Cambios</button>
                  </form>
                  <div id="responseMessages"></div>
                </div>
                 
              </div>
            </div>
          </div>
        </div>

        <div class="py-6 px-6 text-center">
          <p></p>
        </div>
      </div>
    </div>
  </div>

  <script src="assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="assets/js/sidebarmenu.js"></script>
  <script src="assets/js/app.min.js"></script>
  <script src="assets/libs/apexcharts/dist/apexcharts.min.js"></script>
  <script src="assets/libs/simplebar/dist/simplebar.js"></script>
  <script src="assets/js/dashboard.js"></script>

  <script>
  // Función para guardar cambios mediante AJAX
  function guardarCambios() {
    var formData = $('#editForm').serialize();
    
    $.ajax({
      url: 'guardar_cambios.php',
      type: 'POST',
      data: formData,
      dataType: 'json', // Asegura que jQuery interprete la respuesta como JSON
      success: function(response) {
        $('#responseMessage').html('<p class="' + response.status + '">' + response.message + '</p>');

        // Mostrar el mensaje durante 3 segundos
        setTimeout(function() {
          $('#responseMessage').empty(); // Limpiar el contenido del mensaje
        }, 2000);
      },
      error: function(error) {
        console.error('Error al guardar cambios:', error);
        // Puedes manejar errores aquí si es necesario
      }
    });
  }
    // Función para guardar cambios mediante AJAX
    function guardarCambios2() {
    var formData = $('#editForms').serialize();
    
    $.ajax({
      url: 'guardar_cambios.php',
      type: 'POST',
      data: formData,
      dataType: 'json', // Asegura que jQuery interprete la respuesta como JSON
      success: function(response) {
        $('#responseMessages').html('<p class="' + response.status + '">' + response.message + '</p>');

        // Mostrar el mensaje durante 3 segundos
        setTimeout(function() {
          $('#responseMessages').empty(); // Limpiar el contenido del mensaje
        }, 2000);
      },
      error: function(error) {
        console.error('Error al guardar cambios:', error);
        // Puedes manejar errores aquí si es necesario
      }
    });
  }
</script>
</body>

</html>