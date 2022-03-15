<div class="container-sm contact-page">
  <div class="form-container">
    <form class="form" action="https://formspree.io/f/xgedyjzz" method="POST" id="form">
      <h2>Contáctame</h2>
      <div class="field-group">
        <label for="name">Nombre</label>
        <input class="input" type="text" name="name" id="name">
      </div>
      <div class="field-group">
        <label for="surname">Apellido</label>
        <input class="input" type="text" name="surname" id="surname">
      </div>
      <div class="field-group">
        <label for="email">Correo electrónico</label>
        <input class="input" type="email" name="email" id="email">
      </div>
      <div class="field-group">
        <label for="message">Mensaje</label>
        <textarea class="input" name="message" id="message"></textarea>
      </div>
      <button type="submit">Enviar</button>
    </form>
  </div>
</div>

<?php 

  $script = '
    <script src="/build/js/contact-form.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  ';

?>