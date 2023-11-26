<!doctype html>
<html lang="en">
  <?php include 'head.php'; ?>

  <body>

    <?php include 'nav.php'; ?>

    <main>

      <section class="banner_nosotros">
        <div class="position_ab_fondo"></div>
        <img src="assets/img/banner_nosotros.png" class="w-100">
        <div class="container">
          <div class="row">
            <div class="col-lg-6 floter_p">
              <p>Creemos en tu potencial y acompañamos con personas tu ruta profesional</p>
            </div>  
          </div>
        </div>
      </section>

      <section class="section_historia">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h2>Nuestra historia NXTEP</h2>
            </div>
            <div class="col-lg-12">
              <div class="flex_historys">
                <div class="item_histo">
                  <div class="text-center circle_naranja">2020</div>
                  <div class="px-lg-5 px-3">
                    <p>lorem ipsum dolor sit amet, consectetur adipiscing elit,.</p>
                  </div>
                </div>
                <div class="item_histo">
                  <div class="text-center circle_naranja">2020</div>
                  <div class="px-lg-5 px-3">
                    <p>lorem ipsum dolor sit amet, consectetur adipiscing elit,.</p>
                  </div>
                </div> 
                <div class="item_histo">
                  <div class="text-center circle_naranja">2020</div>
                  <div class="px-lg-5 px-3">
                    <p>lorem ipsum dolor sit amet, consectetur adipiscing elit,.</p>
                  </div>
                </div> 
                <div class="item_histo">
                  <div class="text-center circle_naranja">2020</div>
                  <div class="px-lg-5 px-3">
                    <p>lorem ipsum dolor sit amet, consectetur adipiscing elit,.</p>
                  </div>
                </div>                                                
              </div>
            </div>            
          </div>
        </div>
      </section>


      <section class="section_equipo">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 text-center">
              <h3>¡Conoce a nuestro equipo!</h3>
              <p>lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
              <p>lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor.</p>
            </div>
          </div>

          <div class="row">
            <div class="col-lg-12">
              <ul class="nav nav-pills my-lg-5" id="pills-tab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">Founder & Chief of Staff</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">Operations</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Marketing</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" >Community Building</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">People</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">Mentoring</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="pills-disabled-tab" data-bs-toggle="pill" data-bs-target="#pills-disabled" type="button" role="tab" aria-controls="pills-disabled" aria-selected="false" >Tecnología</button>
                </li>                
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
                  <div class="row">
                    <div class="col-lg-3">
                      <div class="card_item_me">
                        <div class="flex_price_star">
                          <div><img src="assets/img/star.png" class="me-lg-2">10</div>
                          <div class="text-end">S/100</div>
                        </div>
                        <div class="img_perfil_empresa text-center py-lg-4">
                          <div class="position-relative">
                            <img src="assets/img/avatar.png">
                            <div class="img_empresa"><img src="assets/img/empresa.png" class=""></div>
                          </div>
                        </div>
                        <div class="datos_usuario text-center">
                          <p>Nombre Apellido</p>
                          <span>Product Lead en Rappi</span>
                        </div>
                        <div class="separador_user_link"></div>

                        <div class="redes_wb_links text-center">
                          <ul>
                            <li><a href=""><img src="assets/img/lin-b.png"></a></li>
                          </ul>

                          <p>Experiencia: 3 años</p>
                        </div>
                      </div>
                    </div>                    
                  </div>

                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">...</div>
                <div class="tab-pane fade" id="pills-disabled" role="tabpanel" aria-labelledby="pills-disabled-tab" tabindex="0">...</div>
              </div>              
            </div>            
          </div>
        </div>
      </section>
    </main>
    

    <?php include 'footer.php'; ?>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script src="script.js"></script>
  </body>
</html>
