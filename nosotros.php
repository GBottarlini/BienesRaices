<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>
<main class="contenedor seccion">
  <h1>Conoce sobre Nosotros</h1>

  <div class="contenido-nosotros">
    <div class="imagen">
      <picture>
        <source srcset="build/img/nosotros.webp" type="image/webp">
        <source srcset="build/img/nosotros.jpg" type="image/jpeg">
        <img loading="lazy" src="build/img/nosotros.jpg" alt="Sobre Nosotros">
      </picture>
    </div>

    <div class="texto-nosotros">
      <blockquote>
        25 Años de experiencia
      </blockquote>

      <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Incidunt a ab, animi porro earum quae magnam, et
        sint provident cum, ratione soluta repellat eaque accusantium eum nihil expedita harum dolores. Lorem ipsum
        dolor sit, amet consectetur adipisicing elit. Assumenda cum sed beatae, blanditiis inventore, quae similique
        voluptate, in dolorum cupiditate neque. Magni, reiciendis? Libero quam aut, tempora minus eum ipsam.Lorem
        ipsum dolor sit amet consectetur adipisicing elit. Distinctio magnam praesentium libero vel quam
        molestiae provident sit sequi. Maxime ex accusantium asperiores iusto voluptates earum, consequuntur
        praesentium provident rem quibusdam?</p>

      <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio magnam praesentium libero vel quam
        molestiae provident sit sequi. Maxime ex accusantium asperiores iusto voluptates earum, consequuntur
        praesentium provident rem quibusdam?</p>
    </div>
  </div>
</main>

<section class="contenedor seccion">
  <h1>Más Sobre Nosotros</h1>

  <div class="iconos-nosotros">
    <div class="icono">
      <img src="build/img/icono1.svg" alt="Icono seguridad" loading="lazy">
      <h3>Seguridad</h3>
      <p>Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae
        dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
    </div>
    <div class="icono">
      <img src="build/img/icono2.svg" alt="Icono Precio" loading="lazy">
      <h3>Precio</h3>
      <p>Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae
        dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
    </div>
    <div class="icono">
      <img src="build/img/icono3.svg" alt="Icono Tiempo" loading="lazy">
      <h3>A Tiempo</h3>
      <p>Possimus, suscipit repudiandae. Autem deserunt aliquid deleniti sit minus consectetur obcaecati molestiae
        dolorem natus dolores reiciendis tempore, explicabo cum nobis laudantium. Voluptates?</p>
    </div>
  </div>
</section>

<?php
incluirTemplate('footer');
?>