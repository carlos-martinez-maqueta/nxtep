<?php
// Conectar a la base de datos
$con = mysqli_connect("localhost", "root", "", "db_nxtep");

// Obtener término de búsqueda y tab activo
$searchTerm = $_POST['term'];
$activeTabId = $_POST['tab'];

// Construir la consulta según el tab activo
switch ($activeTabId) {
    case 'nav-all-tab':
        $sql = "SELECT * FROM tbl_mentores WHERE nombres LIKE '%$searchTerm%' OR apellidos LIKE '%$searchTerm%' OR cargo LIKE '%$searchTerm%'";
        break;
    // Agregar casos para otros tabs según sea necesario
    case 'nav-people-tab':
        $sql = "SELECT * FROM tbl_mentores WHERE nombres LIKE '%$searchTerm%' OR apellidos LIKE '%$searchTerm%' OR cargo LIKE '%$searchTerm%' AND area = '3'";
        break;
        
    default:
        $sql = "SELECT * FROM tbl_mentores WHERE nombres LIKE '%$searchTerm%' OR apellidos LIKE '%$searchTerm%' OR cargo LIKE '%$searchTerm%'";
        break;
}

// Ejecutar la consulta
$resultado = $con->query($sql);

// Construir y devolver resultados
while ($fila = $resultado->fetch_assoc()) {
    // Construir el HTML para cada resultado
    $html = '<div class="col-lg-3 mb-lg-3 ">
              <div class="card_item_me">
                <div class="flex_price_star">
                  <div><img src="assets/img/star.png" class="me-lg-2">'. $fila['estrellas'] .'</div>
                  <div class="text-end"><p class="m-0 w_f_price">S/100</p></div>
                </div>
                <div class="img_perfil_empresa text-center py-lg-4">
                  <div class="position-relative">
                    <img src="assets/img/avatar.png">
                    <div class="img_empresa"><img src="assets/img/empresa.png" class=""></div>
                  </div>
                </div>
                <div class="datos_usuario text-center">
                  <p>' . $fila['nombres'] . ' ' . $fila['apellidos'] . '</p>
                  <span>' . $fila['cargo'] . ' en ' . $fila['empresa'] . '</span>
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
    ';

    // Imprimir el HTML para cada resultado
    echo $html;
}
?>
