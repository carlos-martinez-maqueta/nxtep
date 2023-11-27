<nav class="ul_tabs_dentro_areas">
  <div class="nav nav-tabs row" id="nav-tab" role="tablist">
    <button class="nav-link col active" id="nav-all-tab" data-bs-toggle="tab" data-bs-target="#nav-all" type="button" role="tab" aria-controls="nav-all" aria-selected="true">Todo</button>
    <button class="nav-link col" id="nav-product-tab" data-bs-toggle="tab" data-bs-target="#nav-product" type="button" role="tab" aria-controls="nav-product" aria-selected="false">Product</button>
    <button class="nav-link col" id="nav-growth-tab" data-bs-toggle="tab" data-bs-target="#nav-growth" type="button" role="tab" aria-controls="nav-growth" aria-selected="false">Growth</button>   
    <button class="nav-link col" id="nav-marketing-tab" data-bs-toggle="tab" data-bs-target="#nav-marketing" type="button" role="tab" aria-controls="nav-marketing" aria-selected="true">Marketing</button>
    <button class="nav-link col" id="nav-people-tab" data-bs-toggle="tab" data-bs-target="#nav-people" type="button" role="tab" aria-controls="nav-people" aria-selected="false">People</button>
    <button class="nav-link col" id="nav-diseno-tab" data-bs-toggle="tab" data-bs-target="#nav-diseno" type="button" role="tab" aria-controls="nav-diseno" aria-selected="false">Diseño</button>                                            
  </div>
</nav>
<div class="tab-content" id="nav-tabContent">
  <div class="tab-pane fade show active" id="nav-all" role="tabpanel" aria-labelledby="nav-all-tab" tabindex="0">
    <div class="row " id="">
    <?php
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
  <div class="tab-pane fade" id="nav-product" role="tabpanel" aria-labelledby="nav-product-tab" tabindex="0">
    <div class="row " id="">
    <?php
      $resultado = $con->query($sql1);
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
  <div class="tab-pane fade" id="nav-growth" role="tabpanel" aria-labelledby="nav-growth-tab" tabindex="0">
    <div class="row " id="">
    <?php
      $resultado = $con->query($sql2);
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
  <div class="tab-pane fade" id="nav-marketing" role="tabpanel" aria-labelledby="nav-marketing-tab" tabindex="0">
    <div class="row " id="">
    <?php
      $resultado = $con->query($sql3);
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
  <div class="tab-pane fade" id="nav-people" role="tabpanel" aria-labelledby="nav-people-tab" tabindex="0">
    <div class="row " id="">
    <?php
      $resultado = $con->query($sql4);
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
  <div class="tab-pane fade" id="nav-diseno" role="tabpanel" aria-labelledby="nav-diseno-tab" tabindex="0">
    <div class="row " id="">
    <?php
      $resultado = $con->query($sql5);
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
</div> 