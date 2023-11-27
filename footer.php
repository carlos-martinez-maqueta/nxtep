<!-- SECCION BOLETIN -->
<section class="section_boletin">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 text-center titles_parrafo_n none_boletin">
        <h2>Entérate de lo último</h2>
        <p>Suscríbete y sé el primero en recibir las últimas noticias sobre Product <br> & Growth, eventos y más.</p>
      </div>

      <div class="col-lg-12 mt-lg-3">
        <div id="mensaje" class="text-center mensaje_ok d-none">
          <img src="assets/img/icon.png">
          <h3 class="my-lg-3">¡Genial! Tu suscripción está <br> confirmada</h3>
          <p>Recibirás las últimas noticias sobre producto y growth <br> directamente a tu bandeja de entrada. <br> ¡Aprovecha cada actualización para impulsar tu carrera!</p>
        </div>
        <form id="suscripcionForm" class="form_boletin">
          <div class="div_flex_form_boletin">
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1"><img src="assets/img/form.png" draggable="false"></span>
              <input type="text" class="form-control footer_correo" id="correo" placeholder="Coloca tu correo" aria-label="Username" required aria-describedby="basic-addon1">
            </div>            
            <button type="submit">Suscríbete <img src="assets/img/mentor.png" class="ms-2"></button>
          </div>
          <div><p class="d-none" id="repetido">Este correo ya ah sido registrado</p></div>
        </form>
      </div>
    </div>
  </div>
</section>   
<!-- FOOTER -->
<footer class="footer_all">
  <div class="container">
    <div class="row justify-content-between">
      <div class="col-lg-4 col-12">
        <div class="flex_logo_redes">
          <ul>
            <li class="me-lg-3"><a href=""><img src="assets/img/logo-footer.png"></a></li>
          </ul>
          <ul class="ul_redes_sociales">            
            <li class="mx-lg-2 mx-2"><a href="https://www.tiktok.com/@nxtepla"><img src="assets/img/tiktok.png"></a></li>
            <li class="mx-lg-2 mx-2"><a href="https://pe.linkedin.com/company/nxtepla"><img src="assets/img/linkedin.png"></a></li>
            <li class="d-none mx-lg-2 mx-2"><a href=""><img src="assets/img/wsp.png"></a></li>
            <li class="d-none mx-lg-2 mx-2"><a href=""><img src="assets/img/instagram.png"></a></li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4">
        <ul class="ul_vistas">
          <li class="d-none"><a href="nosotros.php">Nosotros</a></li>
          <li class="d-none"><a href="eventos.php">Eventos</a></li>
          <li class=""><a href="mentorias">Mentorías</a></li>
          <li class="d-none"><a href="voluntariado.php">Voluntariado</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<style type="text/css">
.loading-overlay {
position: fixed;
top: 0;
left: 0;
width: 100%;
height: 100%;
background-color: #000000aa;
justify-content: center;
align-items: center;
z-index: 1050;
text-align: center;
display: flex;
}
.naranja{
color: #f67b04 !important
}
</style>

<!-- /.container-fluid -->
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
