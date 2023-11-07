<?php include "header.php" ?>
<main class="container">
  <section class="row">
    <form class="col-lg-6" action="">
      <div class="row">
        <div class="col-md-6 md-3">
          <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre">
        </div>
        <div class="col-md-6 mb-3">
          <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo electrónico">
        </div>
        <div class="mb-3">
          <input type="tel" class="form-control" name="telefono" id="telefono" placeholder="Número de telefono">
        </div>
        <div class="mb-3">
          <textarea class="form-control" name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
          <div id="infomensaje" class="form-text custompadding">Tus comentarios son muy importantes para nosotros</div>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="recibirpromos">
          <label class="form-check-label" for="recibirpromos">¿Desea recibir promociones?</label>
        </div>
        <div class="custompadding">
          <input type="submit" class="btn btn-success" value="Enviar">
        </div>
      </div>

    </form>
    <iframe class="col-lg-6" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62868.53923732369!2d-84.20792205136718!3d9.993407800000009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fbd06f46ded3%3A0x8b761d5c7052b517!2zQ2luZW1hcmsg4oCiIE94w61nZW5v!5e0!3m2!1ses-419!2scr!4v1696818366543!5m2!1ses-419!2scr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </section>


</main>

<?php include "footer.php" ?>