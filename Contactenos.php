<?php include "header.php" ?>

<main>
  <h1 class="text-center customcolor1 bg-amarillo">
    Bienvenido
  </h1>
  <section>
    <div class="container-xl">
      <div class="row justify-content-evenly">
        <form class="row col-6">
          <div class="row text-center custompadding customcolor1">
            <h2>Registrate</h2>
          </div>
          <div class="col-md-6">
            <input type="text" class="form-control custompadding" name="nombre" id="nombre" placeholder="Nombre">
          </div>
          <div class="col-md-6">
            <input type="email" class="form-control custompadding" name="correo" id="correo" placeholder="Correo electrónico">
          </div>
          <div class="col-md-12">
            <input type="tel" class="form-control custompadding" name="telefono" id="telefono" placeholder="Número de telefono">
          </div>
          <div class="col-md-12">
            <textarea class="form-control custompadding" name="mensaje" id="mensaje" placeholder="Mensaje"></textarea>
            <p id="infomensaje" class="form-text text-center custompadding">Tus comentarios son muy importantes para nosotros</p>
          </div>
          <div class="col-mb-12">
            <input type="checkbox" class="form-check-input" id="recibirpromos">
            <label class="form-check-label" for="recibirpromos">
              ¿Desea recibir promociones?
            </label>
          </div>
          <div class="d-grid gap-2 custompadding">
            <button type="button" class="btn btn-success" id="toastbtn">Enviar</button>
          </div>
        </form>
        <div class="row col-md-6">
          <div class="row text-center custompadding customcolor1">
            <h2>Ubicación</h2>
          </div>
          <iframe class="col-12 mapsize" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62868.53923732369!2d-84.20792205136718!3d9.993407800000009!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0fbd06f46ded3%3A0x8b761d5c7052b517!2zQ2luZW1hcmsg4oCiIE94w61nZW5v!5e0!3m2!1ses-419!2scr!4v1696818366543!5m2!1ses-419!2scr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>

      <!--Notificacion - Toast -->
      <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 10;">
        <div id='toast' class="toast">
          <div class='toast-header'>
            <strong class="me-auto">Nuevo mensaje</strong>
            <small class="">Hace un instante</small>
            <button type="button" data-bs-dismiss="toast" class="btn-close"></button>
          </div>
          <div class='toast-body'>
            <p>¡¡Bienvenido al equipo!!</p>
          </div>
        </div>
      </div>
      <!-- Fin Notificacion - Toast -->
    </div>
  </section>
</main>



<?php include "footer.php" ?>