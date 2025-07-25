<?php

//base de datos
require '../../includes/config/database.php';
$db = conectarDB();

// Consultar para optener los vendedores
$consulta =  "SELECT * FROM vendedores";
$resultado = mysqli_query($db, $consulta);

// Arreglo con mensajes de errores  
$errores = [];


$titulo = '';
$precio = '';
$descripcion = '';
$habitaciones = '';
$wc = '';
$estacionamiento = '';
$vendedores_id = '';


// Ejecutar el codigo despues de que el usuario envia el formulario
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  // echo "<pre>";
  // var_dump($_POST);
  // echo "</pre>";

  $titulo = mysqli_real_escape_string($db, $_POST['titulo']);
  $precio = mysqli_real_escape_string($db, $_POST['precio']);
  $descripcion = mysqli_real_escape_string($db, $_POST['descripcion']);
  $habitaciones = mysqli_real_escape_string($db, $_POST['habitaciones']);
  $wc = mysqli_real_escape_string($db, $_POST['wc']);
  $estacionamiento = mysqli_real_escape_string($db, $_POST['estacionamiento']);
  $vendedores_id = mysqli_real_escape_string($db, $_POST['vendedores_id']);
  $creado =  date('Y/m/d');

  // Asignar files hacia una variable
  $imagen = $_FILES['imagen'];



  if (!$titulo) {
    $errores[] = "Debes añadir un titulo";
  }
  if (!$precio) {
    $errores[] = "El precio es obligarotio";
  }
  if (strlen($descripcion) < 50) {
    $errores[] = "La descripcion es obligatoria y debe tener al menos 50 caracteres";
  }
  if (!$habitaciones) {
    $errores[] = "El Numero de habitaciones es obligatorio";
  }
  if (!$wc) {
    $errores[] = "El Numero de Baños es obligatorio";
  }
  if (!$estacionamiento) {
    $errores[] = "El Numero de lugares de estacionamiento es obligatorio";
  }
  if (!$vendedores_id) {
    $errores[] = "Elige un Vendedor";
  }
  if(!$imagen['name'] || $imagen['error'] ) {
    $errores[] = "La imagen es Obligatoria";
  }

  // Validar por tamaño
  $medida = 100 * 100;

  if($imagen['size'] > $medida ) {
    $errores[] = 'La Imagen es muy pesada';
  }

  // Revisar que el array de errores este vacio

  if (empty($errores)) {
    // Insertar en la base de datos
    $query = " INSERT INTO propiedades (titulo, precio, descripcion, habitaciones, wc, estacionamiento, creado, vendedores_id) VALUES ( '$titulo', '$precio', '$descripcion', '$habitaciones', '$wc', '$estacionamiento', '$creado', '$vendedores_id' ) ";

    // echo $query;

    $resultado = mysqli_query($db, $query);

    if ($resultado) {
      // Redireccionar al usuario.
      header('Location: /admin');
    }
  }
}


require '../../includes/funciones.php';
incluirTemplate('header');
?>

<main class="contenedor seccion">
  <h1>Crear</h1>

  <a href="/admin" class="boton boton-verde">Volver</a>

  <?php foreach ($errores as $error): ?>
    <div class="alerta error">
      <?php echo $error; ?>
    </div>

  <?php endforeach; ?>


  <form class="formulario" method="POST" action="/admin/propiedades/crear.php" enctype="multipart/form-data">
    <fieldset>
      <legend>Informacion General</legend>

      <label for="titulo">Titulo:</label>
      <input type="text" id="titulo" name="titulo" placeholder="Titulo Propiedad" value="<?php echo $titulo; ?>">

      <label for="precio">Precio:</label>
      <input type="number" id="precio" name="precio" placeholder="Precio Propiedad" value="<?php echo $precio; ?>">

      <label for="imagen">Imagen:</label>
      <input type="file" id="imagen" accept="image/jpeg, image/png" name="imagen">

      <label for="descripcion">Descripcion:</label>
      <textarea id="descripcion" name="descripcion"><?php echo $descripcion; ?></textarea>

    </fieldset>

    <fieldset>
      <legend>Informacion Propiedad</legend>

      <label for="habitaciones">Habitaciones:</label>
      <input type="number" id="habitaciones" name="habitaciones" placeholder="Ej: 3" min="1" max="9" value="<?php echo $habitaciones; ?>">

      <label for="wc">Baños:</label>
      <input type="number" id="wc" name="wc" placeholder="Ej: 3" min="1" max="9" value="<?php echo $wc; ?>">

      <label for="estacionamiento">Estacionamiento:</label>
      <input type="number" id="estacionamiento" name="estacionamiento" placeholder="Ej: 3" min="1" max="9" value="<?php echo $estacionamiento; ?>">
    </fieldset>

    <fieldset>
      <legend>Vendedor</legend>
      <select name="vendedores_id">
        <option value="">-- Seleccione --</option>
        <?php while ($vendedor = mysqli_fetch_assoc($resultado)): ?>
          <option <?php echo $vendedores_id === $vendedor['apellido'] ? 'selected' : ''; ?> value="<?php echo $vendedor['id']; ?>"> <?php echo $vendedor['nombre'] . " " . $vendedor['apellido']; ?></option>

        <?php endwhile; ?>
      </select>
    </fieldset>

    <input type="submit" value="Crear Propiedad" class="boton boton-verde">
  </form>

</main>

<?php
incluirTemplate('footer');
?>