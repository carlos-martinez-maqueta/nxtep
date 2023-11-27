<?php 
  $con = mysqli_connect("localhost","root","","db_nxtep");
  $sql = "SELECT * FROM tbl_mentores";
  $sql1 = "SELECT * FROM tbl_mentores WHERE area = '1'";
  $sql2 = "SELECT * FROM tbl_mentores WHERE area = '2'";
  $sql3 = "SELECT * FROM tbl_mentores WHERE area = '3'";
  $sql4 = "SELECT * FROM tbl_mentores WHERE area = '4'";
  $sql5 = "SELECT * FROM tbl_mentores WHERE area = '5'";
 ?>
<!doctype html>
<html lang="en">
  <?php include 'head.php'; ?>

  <body>

    <?php include 'nav.php'; ?>

    <main>
      <section class="section_banner_mentor">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center title_mentorias">
              <h2>Encuentra un mentor que te ayude a alcanzar tus objetivos</h2>
              <p>Los mejores especialistas te acompañaran en esta ruta de aprendizaje para convertirte en el perfil digital que el mundo necesita. </p>
            </div>

            <div class="col-12 text-center seach_mentor_a">
              <a href="">Buscar mi mentor <img src="assets/img/mentor.png"></a>
            </div>

            <div class="col-12 text-center">
              <h3>¡Nuestros mentores trabajan en empresas que transforman industrias!</h3>
            </div>
          </div>

          <div class="row">
            <div class="col-12 text-center logos_empresas">
              <div><img src="assets/img/logos.png"></div>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-4">
              <div class="fondo_porcentajes_men">
                <p>80%</p>
                <span>de las empresas consideran que los perfiles digitales son clave para su crecimiento.</span>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="fondo_porcentajes_men">
                <p>94%</p>
                <span>de CEOs encuestados han tenido un mentor en algún momento de su carrera.</span>
              </div>
            </div>
            <div class="col-lg-4">
              <div class="fondo_porcentajes_men">
                <p>76%</p>
                <span>de egresados cree que la mentoría es importante para su desarrollo profesional.</span>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section_mentorias_listados_busquedas">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 col-12 text-center">
              <h4>Encuentra tu mentoría ideal</h4>
            </div>

            <div class="col-12">
              <form>
                <div class="w-100 search_input" id="search_input">
                  <div class="input-group">
                    <span class="input-group-text" id="basic-addon1"><img src="assets/img/search.svg"></span>
                    <input type="text" class="form-control" placeholder="Buscar por nombre, compañía o rol" aria-label="Username" aria-describedby="basic-addon1">
                  </div>
                </div> 

              <ul class="nav nav-pills mb-3 ul_2_items" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-areas-tab" data-bs-toggle="pill" data-bs-target="#pills-areas" type="button" role="tab" aria-controls="pills-areas" aria-selected="true">Áreas</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-temas-tab" data-bs-toggle="pill" data-bs-target="#pills-temas" type="button" role="tab" aria-controls="pills-temas" aria-selected="false">Temas</button>
                </li>
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-areas" role="tabpanel" aria-labelledby="pills-areas-tab" tabindex="0">
                  <?php include 'areas.php'; ?>                 
                </div>

                <div class="tab-pane fade" id="pills-temas" role="tabpanel" aria-labelledby="pills-temas-tab" tabindex="0">
                  <?php include 'temas.php'; ?>                  
                </div>
              </div>    
              </form>          
            </div>
          </div>
        </div>
      </section>

      <section style="background-color: #ffffff; height: 400px;"></section>
    </main>
    

    <?php include 'footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>

    <script>
      $(document).ready(function () {
        // Manejar el evento de entrada en el cuadro de búsqueda
        $('#search_input input').on('input', function () {
          // Obtener el valor del cuadro de búsqueda
          var searchTerm = $(this).val();

          // Obtener el ID del tab activo
          var activeTabId = $('.ul_tabs_dentro_areas .nav-link.active').attr('id');

          // Realizar una solicitud AJAX para obtener resultados
          $.ajax({
            url: 'buscar.php', // Cambia 'buscar.php' con la URL de tu script de búsqueda en el servidor
            method: 'POST',
            data: { term: searchTerm, tab: activeTabId },
            success: function (response) {
              // Actualizar la lista de resultados con la respuesta del servidor
              $('.searchResults').html(response);
            }
          });
        });

        // Manejar el cambio de tabs
        $('.ul_tabs_dentro_areas .nav-link').on('click', function () {
          // Simular el evento de entrada en el cuadro de búsqueda para actualizar los resultados
          $('#search_input input').trigger('input');
        });
      });
    </script>    
  </body>
</html>