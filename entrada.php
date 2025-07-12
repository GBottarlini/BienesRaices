<?php
require 'includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion contenido-centrado">
  <h1>Guia para la decoracion de tu hogar</h1>

  <picture>
    <source srcset="build/img/destacada2.webp" type="image/webp">
    <source srcset="build/img/destacada2.jpg" type="image/jpeg">
    <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
  </picture>
  <p class="informacion-meta">Escrito el: <span>09/07/2025</span> por: <span>Admin</span> </p>

  <div class="resumen-propiedad">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime blanditiis nulla vero aperiam vitae in dolores
      dolorum iste at quo repellat possimus suscipit magnam, soluta veritatis praesentium excepturi earum nesciunt
      neque! In illum architecto optio ratione ullam, veritatis animi? Blanditiis eaque architecto porro, accusamus,
      excepturi neque id saepe quam laborum provident voluptate enim quisquam vel sed pariatur fuga suscipit dicta,
      officiis minus aspernatur aut quis quas culpa. Voluptate debitis in aliquid ab impedit suscipit nulla
      consequuntur ullam? Iste tempora officia expedita ipsam beatae quas porro minima magnam at sapiente voluptates
      sit deleniti nostrum fuga vel obcaecati, eum amet saepe aut dolorem. Voluptate illo obcaecati quae nihil
      repudiandae tempora, alias sapiente repellendus quam iste aliquid repellat officiis doloribus facere velit
      delectus. </p>
  </div>
</main>

<?php
incluirTemplate('footer');
?>