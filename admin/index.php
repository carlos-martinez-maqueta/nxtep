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
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
            <li class="nav-item d-none">
              <a class="nav-link nav-icon-hover" href="javascript:void(0)">
                <i class="ti ti-bell-ringing"></i>
                <div class="notification bg-primary rounded-circle"></div>
              </a>
            </li>
          </ul>
          <div class="d-none navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
              
              <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="assets/images/profile/user-1.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-user fs-6"></i>
                      <p class="mb-0 fs-3">My Profile</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-mail fs-6"></i>
                      <p class="mb-0 fs-3">My Account</p>
                    </a>
                    <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                      <i class="ti ti-list-check fs-6"></i>
                      <p class="mb-0 fs-3">My Task</p>
                    </a>
                    <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
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
                      <div class="mb-3 col-lg-4">
                        <label for="" class="form-label">Años de Experiencia</label>
                        <input type="text" class="form-control" id="" name="experiencia" placeholder="" required>
                      </div> 
                      <div class="mb-3 col-lg-4">
                        <label for="" class="form-label">Áreas</label>
                        <select class="form-select" aria-label="Default select example" name="area" required>
                          <option selected>Open this select</option>
                          <option value="1">Product</option>
                          <option value="2">Growth</option>
                          <option value="3">Marketing</option>
                          <option value="4">People</option>
                          <option value="5">Diseño</option>
                        </select>                        
                      </div> 
                      <div class="mb-3 col-lg-4">
                        <label for="" class="form-label">Áreas</label>
                        <select class="form-select" aria-label="Default select example" name="area" required>
                          <option selected>Open this select</option>
                          <option value="1">Mejorar mi CV</option>
                          <option value="2">Optimizar Linkedin</option>
                          <option value="3">Apoyo con un desafío</option>
                          <option value="4">Aumentar mis ventas</option>
                          <option value="5">Estrategias Digitales</option>
                        </select>                        
                      </div>                                                                                                                                   
                      <div class="mb-3 col-lg-6">
                        <label for="" class="form-label">Imagen Perfil</label>
                        <input class="form-control" type="file" id="" name="img_perfil" required>
                      </div>
                      <div class="mb-3 col-lg-6">
                        <label for="" class="form-label">Imagen Logo</label>
                        <input class="form-control" type="file" id="" name="img_logo" required>
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