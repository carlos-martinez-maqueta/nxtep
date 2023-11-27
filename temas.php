<nav class="ul_tabs_dentro_areas2">
  <div class="nav nav-tabs row" id="nav-tab" role="tablist">
    <button class="nav-link col active" id="nav-cv-tab" data-bs-toggle="tab" data-bs-target="#nav-cv" type="button" role="tab" aria-controls="nav-cv" aria-selected="true">Mejorar mi cv</button>
    <button class="nav-link col" id="nav-optimizar-tab" data-bs-toggle="tab" data-bs-target="#nav-optimizar" type="button" role="tab" aria-controls="nav-optimizar" aria-selected="false">Optimizar mi LinkedIn</button>
    <button class="nav-link col" id="nav-desafio-tab" data-bs-toggle="tab" data-bs-target="#nav-desafio" type="button" role="tab" aria-controls="nav-desafio" aria-selected="false">Apoyo con un desafío</button>   
    <button class="nav-link col" id="nav-ventas-tab" data-bs-toggle="tab" data-bs-target="#nav-ventas" type="button" role="tab" aria-controls="nav-ventas" aria-selected="true">Aumentar mis ventas</button>
    <button class="nav-link col" id="nav-estrategias-tab" data-bs-toggle="tab" data-bs-target="#nav-estrategias" type="button" role="tab" aria-controls="nav-estrategias" aria-selected="false">Estrategias Digitales</button>                                        
  </div>
</nav>

<div class="tab-content" id="nav-tabContents">
  <div class="tab-pane fade show active" id="nav-cv" role="tabpanel" aria-labelledby="nav-cv-tab" tabindex="0">
    <div class="row" id="searchResults">
    <?php
      $con = mysqli_connect("localhost","root","","db_nxtep");
      $sql = "SELECT * FROM tbl_mentores";
      $resultado = $con->query($sql);
      while ($fila = $resultado->fetch_assoc()) { ?>  
          <div class="col-lg-3 mb-lg-3 ">
            <div class="card_item_me">
              <div class="flex_price_star">
                <div><img src="assets/img/star.png" class="me-lg-2"><?php echo $fila['estrellas'] ?></div>
                <div class="text-end"><p class="m-0 w_f_price">S/100</p></div>
              </div>
              <div class="img_perfil_empresa text-center py-lg-4">
                <div class="position-relative">
                  <img src="assets/img/avatar.png">
                  <div class="img_empresa"><img src="assets/img/empresa.png" class=""></div>
                </div>
              </div>
              <div class="datos_usuario text-center">
                <p><?php echo $fila['nombres'].'<br> '.$fila['apellidos'];  ?></p>
                <span><?php echo $fila['cargo'] ?> en <?php echo $fila['empresa'] ?></span>
              </div>
              <div class="separador_user_link"></div>

              <div class="redes_wb_links text-center">
                <ul>
                  <li><a href=""><img src="assets/img/lin-b.png"></a></li>
                </ul>

                <p>Experiencia: 3 años</p>
              </div>

              <div class="agendemos_a">
                <a href="">Agendemos</a>
              </div>
            </div>
          </div>                                     
    <?php
        }
    ?>                                                                                                               
    </div>
  </div>
  <div class="tab-pane fade" id="nav-optimizar" role="tabpanel" aria-labelledby="nav-optimizar-tab" tabindex="0">.2..</div>
  <div class="tab-pane fade" id="nav-desafio" role="tabpanel" aria-labelledby="nav-desafio-tab" tabindex="0">.3.</div>
  <div class="tab-pane fade" id="nav-ventas" role="tabpanel" aria-labelledby="nav-ventas-tab" tabindex="0">.4.</div>
  <div class="tab-pane fade" id="nav-estrategias" role="tabpanel" aria-labelledby="nav-estrategias-tab" tabindex="0">.5.</div>
</div> 