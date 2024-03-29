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
                    <h5 class="card-title fw-semibold">AGREGAR MENTORES</h5>
                  </div>
                  <form method="POST" enctype="multipart/form-data" id="myForm">
                      <div class="row">
                          <div class="mb-3 col-lg-4">
                              <label for="" class="form-label">Nombres</label>
                              <input type="text" class="form-control" id="" name="nombres" placeholder="" required>
                          </div>
                          <div class="mb-3 col-lg-4">
                              <label for="" class="form-label">Apellidos</label>
                              <input type="text" class="form-control" id="" name="apellidos" placeholder="" required>
                          </div>  
                          <div class="mb-3 col-lg-2">
                              <label for="" class="form-label">Precio</label>
                              <input type="text" class="form-control" id="" name="precio" placeholder="" required>
                          </div>  
                          <div class="mb-3 col-lg-2">
                              <label for="" class="form-label">Estrellas</label>
                              <input type="text" class="form-control" id="" name="estrellas" placeholder="" required>
                          </div>                        
                          <div class="mb-3 col-lg-4">
                              <label for="" class="form-label">Cargo</label>
                              <input type="text" class="form-control" id="" name="cargo" placeholder="" required>
                          </div>     
                          <div class="mb-3 col-lg-4">
                              <label for="" class="form-label">Empresa</label>
                              <input type="text" class="form-control" id="" name="empresa" placeholder="" required>
                          </div>                                             
                          <div class="mb-3 col-lg-4">
                              <label for="" class="form-label">Link Linkedin</label>
                              <input type="text" class="form-control" id="" name="linkedin" placeholder="" required>
                          </div>  
                          <div class="mb-3 col-lg-2">
                              <label for="" class="form-label">Años de Experiencia</label>
                              <input type="text" class="form-control" id="" name="experiencia" placeholder="" required>
                          </div> 
                          <div class="mb-3 col-lg-10">
                              <label for="" class="form-label">Link Agenda</label>
                              <input type="text" class="form-control" id="" name="agenda" placeholder="" required>
                          </div>                           
                          <div class="mb-3 col-lg-4">
                              <label for="" class="form-label">Imagen Perfil</label>
                              <input class="form-control" type="file" id="" name="img_perfil" required>
                          </div>
                          <div class="mb-3 col-lg-4">
                              <label for="" class="form-label">Imagen Logo</label>
                              <input class="form-control" type="file" id="" name="img_logo" required>
                          </div>                       
                          <div class="mb-3 col-lg-8">
                              <label for="" class="form-label">Áreas</label>
                              <br>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="area1" name="areas[]" value="1">
                                  <label class="form-check-label" for="area1">Product</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="area2" name="areas[]" value="2">
                                  <label class="form-check-label" for="area2">Growth</label>
                              </div> 
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="area3" name="areas[]" value="3">
                                  <label class="form-check-label" for="area3">Marketing</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="area4" name="areas[]" value="4">
                                  <label class="form-check-label" for="area4">People</label>
                              </div> 
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="area5" name="areas[]" value="5">
                                  <label class="form-check-label" for="area5">Diseño</label>
                              </div>                                                                                           
                          </div> 
                          <div class="mb-3 col-lg-12">
                              <label for="" class="form-label">Temas</label>
                              <br>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="tema1" name="temas[]" value="1">
                                  <label class="form-check-label" for="tema1">Mejorar mi CV</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="tema2" name="temas[]" value="2">
                                  <label class="form-check-label" for="tema2">Optimizar Linkedin</label>
                              </div> 
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="tema3" name="temas[]" value="3">
                                  <label class="form-check-label" for="tema3">Apoyo con un desafío</label>
                              </div>
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="tema4" name="temas[]" value="4">
                                  <label class="form-check-label" for="tema4">Aumentar mis ventas</label>
                              </div> 
                              <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="checkbox" id="tema5" name="temas[]" value="5">
                                  <label class="form-check-label" for="tema5">Estrategias Digitales</label>
                              </div>                                                                                           
                          </div>                                                                                                                                                         

                          <div class="mt-4 col-lg-12">
                              <button type="submit" class="btn w-100 py-2 btn-primary">Guardar</button>
                          </div>                                          
                      </div>
                  </form>
                  <div id="responseMessage"></div>
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


  <div id="spinner" class="loading-overlay">
    <div class="spinner-grow naranja" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-grow naranja ms-3" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-grow naranja ms-3" role="status">
        <span class="visually-hidden">Loading...</span>
    </div>
    <div class="spinner-grow naranja ms-3" role="status">
        <span class="visually-hidden">Loading...</span>
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
  $(document).ready(function() {
      var spinner = $("#spinner");
      spinner.hide();

      $('form').submit(function(e) {
          e.preventDefault();
          spinner.show();

          var formData = new FormData(this);

          $.ajax({
              type: 'POST',
              url: 'addUser.php',
              data: formData,
              dataType: 'json',
              contentType: false,
              processData: false,
              success: function(response) {
                  // Maneja la respuesta del servidor
                  console.log(response);
                  spinner.hide();

                  // Actualiza el contenido del div con el mensaje de respuesta
                  $('#responseMessage').html('<p class="' + response.status + '">' + response.message + '</p>');
                  $('form').hide();
                  // Oculta el formulario después de 3 segundos
                  setTimeout(function() {
                     window.location.href = "index.php";
                  }, 3000);
               
              },
              error: function(error) {
                  console.error('Error en la petición AJAX:', error);
                  spinner.hide();

                  // Muestra un mensaje de error en el div
                  $('#responseMessage').html('<p class="error">Error en la petición AJAX</p>');
              }
          });
      });
  });

  </script>


</body>

</html>