<?php include 'dbs.php'; ?>
<!doctype html>
<html lang="es">
<?php 
include 'head.php'; ?>

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
            <a href="#mentores">Buscar mi mentor <img src="assets/img/mentor.png"></a>
          </div>

          <div class="col-12 text-center">
            <h3>¡Nuestros mentores trabajan en empresas que transforman industrias!</h3>
          </div>
        </div>

        <div class="row">
          <div class="col-12 text-center logos_empresas">
            <div class="d-lg-block d-none"><img src="assets/img/logos.png"></div>
            <div class="d-lg-none d-block"><img src="assets/img/logos-res.png"></div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-6">
            <div class="fondo_porcentajes_men">
              <p>80%</p>
              <span>de las empresas consideran que los perfiles digitales son clave para su crecimiento.</span>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <div class="fondo_porcentajes_men">
              <p>94%</p>
              <span>de CEOs encuestados han tenido un mentor en algún momento de su carrera.</span>
            </div>
          </div>
          <div class="col-lg-4 col-12 mt-lg-0 mt-3">
            <div class="fondo_porcentajes_men">
              <p>76%</p>
              <span>de egresados cree que la mentoría es importante para su desarrollo profesional.</span>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="section_informacion_time_mentoria">
      <div class="container my-5">
        <div class="row">
          <div class="col-lg-12 text-center title_btm_margin">
            <h2>¿Cuándo debería tomar una mentoría en NXTEP?</h2>
          </div>
          <?php
              $ids = [1, 2, 3, 4];
              $idString = implode(',', $ids);

              $resultc = $conn->query("SELECT * FROM tbl_infos WHERE id IN ($idString)");
              
                if ($resultc->num_rows > 0) {
                    while ($rows = $resultc->fetch_assoc()) {
              ?>
              <div class="col-lg-6 col-md-6 col-12 div_col_item">
                <div class="flex_items">
                  <div><img src="assets/img/Frame.svg" alt=""></div>
                  <div><p><?php echo $rows['contenido']; ?></p></div>
                </div>
              </div>
              <?php
              }
                } else {
                    echo "No se encontraron registros en tbl_infos";
                }
              ?>
        </div>
      </div>
    </section>

    <section class="section_guia_mentoria text-center">
      <div class="container my-5">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2>Proceso para recibir mi mentoría</h2>
          </div>
          <div class="col-lg-12">
            <div class="guia_mentoria">
            <?php
              $ids2 = [5, 6, 7, 8];
              $idString2 = implode(',', $ids2);

              $result2 = $conn->query("SELECT * FROM tbl_infos WHERE id IN ($idString2)");
              if ($result2->num_rows > 0) {
                  while ($row2 = $result2->fetch_assoc()) {
            ?>
              <div class="item_guia_mentoria">
                <div class="text-center circle_naranja"><?php echo $row2['seccion']; ?></div>
                <div class="px-lg-5 px-3 text-center">
                  <h6><?php echo $row2['titulo']; ?></h6> 
                  <p><?php echo $row2['contenido']; ?></p>                   
                </div>
              </div>
            <?php
                  }
              } else {
                  echo "No se encontraron registros en tbl_infos";
              }
              $conn->close();
            ?>                                               
            </div>
          </div>            
        </div>
      </div>
    </section>

    <section class="section_mentorias_listados_busquedas" id="mentores">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-12 text-center">
            <h4>Encuentra tu mentoría ideal</h4>
          </div>

          <div class="col-12">
            <form id="mentorias_form">
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

                  <nav class="ul_tabs_dentro_areas">
                    <div class="nav nav-tabs row" >
                      <div class="owl-carousel slider-ul">
                        <div id="nav_tab_areas" role="tablist"></div>
                      </div>                    
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab" tabindex="0">
                      <div class="row " id="mentoresAreasCardsContainer"></div>
                    </div>
                  </div>
                </div>

                <div class="tab-pane fade show" id="pills-temas" role="tabpanel" aria-labelledby="pills-temas-tab" tabindex="0">
                  <nav class="ul_tabs_dentro_temas">
                    <div class="nav nav-tabs row">
                      <div class="owl-carousel slider-ul">
                        <div id="nav_tab_temas" role="tablist"></div>
                      </div>
                    </div>
                  </nav>
                  <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab" tabindex="0">
                      <div class="row " id="mentoresTemasCardsContainer"></div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
    <section class="section_meentes">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center py-2">
            <h2>¿Qué dicen nuestros meentes?</h2>
          </div>

          <div class="col-12">
            <div class="owl-carousel owl-resenas">
              <?php
                $result = $conn->query("SELECT * FROM tbl_resenas");
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
              ?>
                <div class="card_resena mb-3">
                  <p>"<?php echo $row['resena']; ?>"</p>
                  <div class="flex_user_resena">
                    <div class="px-2 usr"><img src="admin/<?php echo $row['img_perfil']; ?>" alt=""></div>
                    <div class="link">
                      <p class=""><?php echo $row['nombres']; ?> <?php echo $row['apellidos']; ?><a target="_blanck" href=" <?php echo $row['linkedin']; ?>"><img src="assets/img/link.png" class="mx-2" alt=""></a></p> 
                      <span><?php echo $row['cargo']; ?> en <?php echo $row['empresa']; ?></span>
                    </div>
                  </div>
                </div>
              <?php
              }
                } else {
                    echo "No se encontraron registros en tbl_infos";
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
<style>
  .section_meentes{
    padding: 40px 0px;
  }
  .section_meentes h2{
    font-size: 32px;
    font-weight: 700;
    line-height: 48px;
    letter-spacing: 0em;
    text-align: center;
  }
  .card_resena{
    padding: 16px;
    border: 1px solid #DFDFE2;
    border-radius: 20px;
  }
  .card_resena .flex_user_resena{
    display: flex;
  }
  .card_resena .flex_user_resena .usr img{
    width: 50px !important;
    height: 50px;
    object-fit: cover;
    margin: auto;
    border-radius: 35px;
  }
  .card_resena .flex_user_resena .link img{
    width: 18px !important;
  }
  .card_resena .flex_user_resena .link p{
    font-size: 18px;
    font-weight: 500;
    line-height: 20px;
    letter-spacing: 0em;
    text-align: center;
    display: flex;
    align-items: center;
  }
  .card_resena .flex_user_resena .link span{
    font-size: 14px;
    font-weight: 400;
    line-height: 16px;
    letter-spacing: 0em;
    text-align: left;
  }
  .card_resena .flex_user_resena p{
    margin: 0px;
  }
  .owl-resenas .owl-dots{
    text-align: center;
  }
  .owl-resenas .owl-dots button{
    margin: 0px 3px;
    width: 12px;
    height: 12px;
    border-radius: 8px;
    border: 1px solid #EA5624; 
  }
  .owl-resenas .owl-dots button.active{
    background-color: #EA5624;
  }
</style>

  <?php include 'footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
  <script src="assets/js/script.js"></script>
  <script src="assets/js/mentorias.js"></script>

    <script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
  <script type="text/javascript" src="assets/js/contenido.js"></script>
</body>

</html>