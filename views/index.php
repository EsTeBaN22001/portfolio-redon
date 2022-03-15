<section class="container-sm section about reveal-left">
  <div class="about-text-container">
    <h1 class="title">Desarrollador <br> <span class="typed"></span></h1>
    <p>¡Hola! Soy un Desarrollador Fullstack, tengo 16 años y he creado y vendido alguna página web como freelancer, además tengo un curso de desarrollo web fullstack de 79 horas completado. Creo sitios web exitosos que son rápidos, fáciles de usar, auto administrables y construidos con las mejores prácticas.</p>
  </div>
  <div class="about-img-container">
    <img src="build/img/about.svg" alt="Imágen acerca de mí">
  </div>
</section>

<section class="container-sm section cards reveal-right">
  <h2 class="title-cards-container">Habilidades principales</h2>
  <p class="paragraph-cards-container">Estas son las principales habilidades y tecnologías en las que desarrollo las aplicaciones web actualmente. Pero puedo adaptarme fácilmente a otras tecnologias o lo que requiera el proyecto.</p>
  <div class="cards-container">
    <div class="card">
      <div class="card-icon">
        <i class="fa-solid fa-pen-ruler"></i>
      </div>
      <h2 class="card-title">Front-end</h2>
      <div class="card-text">
        <p>Las principales tecnologías que utilizo para el front-end son: HTML, CSS3 y Javascript. Tengo un nivel aceptable y básico para realizar las tareas que se requieran. Además sé utilizar SASS y como compilador y task-runner uso GULP.</p>
      </div>
    </div>
    <div class="card">
      <div class="card-icon">
        <i class="fa-solid fa-database"></i>
      </div>
      <h2 class="card-title">Back-end</h2>
      <div class="card-text">
        <p>En la parte de back-end las tecnologías principales que manejo son como lenguaje de programación PHP y como bases de datos MySql. Se hacer lo básico de estas tecnologías. Incluso en el lenguaje php se utilizar el patrón de diseño MVC.</p>
      </div>
    </div>
    <div class="card">
      <div class="card-icon">
        <i class="fa-solid fa-users"></i>
      </div>
      <h2 class="card-title">Trabajo en equipo</h2>
      <div class="card-text">
        <p>Las tecnologías y aplicaciones que se utilizar para trabajar en equipo son GIT y para organizar las tareas o planificar sé utilizar lo básico de Notion.</p>
      </div>
    </div>
  </div>
</section>

<section class="container-sm section proyects reveal-left">
  <h2>Proyectos realizados más populares</h2>
  <div class="proyects-container">
    <div class="proyect" id="uptask">
      <div class="img-container">
        <img src="build/img/uptask-tasks.webp" alt="uptask-task">
      </div>
      <div class="text-container">
        <h3>UpTask</h3>
        <p>Este proyecto se basa en un gestor de proyectos y tareas pendientes. Con esta página puedes crear proyectos a realizar y gestionar las tareas que tienes que realizar en ese proyecto.</p>
        <div class="buttons-container">
          <a class="visit-site-button" target="_blank" href="https://uptaskapper.000webhostapp.com/">Visitar sitio</a>
        </div>
      </div>
    </div>
    <hr>
    <div class="proyect" id="nissi">
      <div class="img-container">
        <img src="build/img/nissi-index.webp" alt="nissi-confecciones-index">
      </div>
      <div class="text-container">
        <h3>Nissi-confecciones</h3>
        <p>Este sitio web lo vendí a un cliente el cual quería potenciar su emprendimiento y tener presencia en internet. Este sitio cuenta con galería de productos e imágenes y es totalmente autoadministrable por el cliente. Es decir que tiene toda una interfaz para ser autoadministrada.</p>
        <div class="buttons-container">
          <a class="visit-site-button" target="_blank" href="https://nissi-confecciones.000webhostapp.com/">Visitar sitio</a>
        </div>
      </div>
    </div>
    <hr>
    <div class="proyect" id="appsalon">
      <div class="img-container">
        <img src="build/img/appsalon-index.webp" alt="appsalon-index">
      </div>
      <div class="text-container">
        <h3>AppSalon</h3>
        <p>Este proyecto se basa en reservar una cita para un salón de belleza en el que podés reservar que tipo de servicio necesitas y reservar la cita con tus datos. Además cuenta con un panel de administración para el dueño/a del salón de belleza o peluquería.</p>
        <div class="buttons-container">
          <a class="visit-site-button" target="_blank" href="https://appsalon-er.000webhostapp.com/">Visitar sitio</a>
        </div>
      </div>
    </div>
    <hr>
  </div>
  <a href="/proyects" class="button-all-proyects">Ver todos los proyectos</a>
</section>

<section class="container-sm contact-us reveal-right">
  <div class="contact-us-container">
    <h3>Contáctame dando click a este enlace</h3>
    <a href="/contact" class="contact-button">Contáctame</a>
  </div>
</section>

<?php 

$script = '
  <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
  <script src="/build/js/customTyped.js"></script>
  <script src="/build/js/customScrollReveal-index.js"></script>
';

?>
