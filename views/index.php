<section class="container-sm section about reveal-left">
  <div class="about-text-container">
    <h1 class="title">&lt;Desarrollador <br> <span class="typed"></span>/&gt;</h1>
    <p>¡Hola! Mi nombre es Esteban y soy un Desarrollador Fullstack y tengo conocimientos en desarrollo de aplicaciones web tanto front-end como back-end. he creado y vendido páginas web como freelance. Estoy a 1 año de recibime con un título secundario de técnico en informática y además cuento con cursos online y capaciones sobre desarrollo web.</p>
  </div>
  <div class="about-img-container reveal-left">
    <img src="build/img/about.svg" alt="Imágen acerca de mí">
  </div>
</section>

<section class="container-sm section cards reveal-right">
  <h2 class="title-cards-container">&lt;Habilidades principales/&gt;</h2>
  <p class="paragraph-cards-container">Tecnologías en las que desarrollo las aplicaciones web actualmente. Pero puedo adaptarme fácilmente a otras tecnologias o lo que requiera el proyecto.</p>
  <div class="cards-container">
    <div class="card reveal-vertical1">
      <div class="card-icon">
        <i class="fa-solid fa-pen-ruler"></i>
      </div>
      <h2 class="card-title">Front-end</h2>
      <div class="card-text">
        <p>Las principales tecnologías que utilizo para el front-end son: HTML, CSS3 y Javascript. Tengo un nivel aceptable y básico para realizar las tareas que se requieran. Además sé utilizar SASS y como compilador y task-runner uso GULP.js.</p>
      </div>
    </div>
    <div class="card reveal-vertical2">
      <div class="card-icon">
        <i class="fa-solid fa-database"></i>
      </div>
      <h2 class="card-title">Back-end</h2>
      <div class="card-text">
        <p>En la parte de back-end las tecnologías principales que manejo son: como lenguaje de programación PHP y como bases de datos MySql. Se hacer lo básico de estas tecnologías. Incluso en el lenguaje php se utilizar el patrón de diseño MVC.</p>
      </div>
    </div>
    <div class="card reveal-vertical3">
      <div class="card-icon">
        <i class="fa-solid fa-users"></i>
      </div>
      <h2 class="card-title">Trabajo en equipo</h2>
      <div class="card-text">
        <p>Las tecnologías y aplicaciones que se utilizar para trabajar en equipo son GIT y para organizar las tareas o planificaciones sé utilizar lo básico de Notion.</p>
      </div>
    </div>
  </div>
</section>

<section class="container-sm section proyects reveal-left">
  <h2>&lt;Proyectos realizados más populares/&gt;</h2>
  <div class="proyects-container">
    <div class="proyect reveal-horizontal1" id="nissi">
      <div class="img-container">
        <img src="build/img/nissi-index.webp" alt="nissi-confecciones-index">
      </div>
      <div class="text-container">
        <div class="buttons-container">
          <h3>Nissi-confecciones</h3>
          <a class="visit-site-button" target="_blank" href="https://nissi-confecciones.000webhostapp.com/">Visitar sitio</a>
        </div>
        <p>Este sitio web fué vendido a un cliente el cual quería potenciar su emprendimiento y tener presencia en internet. Este sitio cuenta con galería de productos e imágenes y es totalmente autoadministrable por el cliente. Es decir que tiene toda una interfaz para ser controlada por el dueño del sitio.</p>
      </div>
    </div>
    <div class="proyect reveal-horizontal2" id="uptask">
      <div class="img-container">
        <img src="build/img/uptask-tasks.webp" alt="uptask-task">
      </div>
      <div class="text-container">
        <div class="buttons-container">
          <h3>UpTask</h3>
          <a class="visit-site-button" target="_blank" href="https://uptaskapper.000webhostapp.com/">Visitar sitio</a>
        </div>
        <p>Este proyecto se basa en un gestor de proyectos y tareas pendientes. Con esta página puedes crear proyectos a realizar y gestionar las tareas que tienes que realizar en ese proyecto.</p>
      </div>
    </div>
    <div class="proyect reveal-horizontal3" id="appsalon">
      <div class="img-container">
        <img src="build/img/appsalon-index.webp" alt="appsalon-index">
      </div>
      <div class="text-container">
        <div class="buttons-container">
          <h3>AppSalon</h3>
          <a class="visit-site-button" target="_blank" href="https://appsalon-er.000webhostapp.com/">Visitar sitio</a>
        </div>
        <p>Este proyecto se basa en reservar una cita para un salón de belleza en el que podés reservar que tipo de servicio necesitas y reservar la cita con tus datos. Además cuenta con un panel de administración para el dueño/a del salón de belleza o peluquería.</p>
      </div>
    </div>
  </div>
  <a href="/proyects" class="button-all-proyects">Ver todos los proyectos</a>
</section>

<?php include_once(__DIR__ . '/templates/contact-us-card.php'); ?>

<?php 

$script = '
  <script src="/build/js/Typed.js"></script>
  <script src="/build/js/customTyped.js"></script>
  <script src="/build/js/customScrollReveal-index.js"></script>
';

?>
