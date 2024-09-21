<!DOCTYPE html>
<html lang="es">

<head>
  <title>Actualizar registros de la base de datos</title>
  <link rel="stylesheet" href="styleCalAtu.css">
</head>
<body>
 
<center id="container">
  <h1>Actualizar un registro</h1>
  <br>
  <?php
    include "index_conex.php";

    if(! $_POST) {
  ?>    
      <form class="form" method="POST" action="index_actualizarCal.php">
        <p>Nombre:</p>
        <?php
          // creamos la sentencia SQL y la ejecutamos
          $sql = "select nombre from calendario order by nombre";
          $result = $conn->query($sql);
          
          //Generamos el campo select
          echo '<select name="nombre">';
          while ($row = $result->fetch_array()) {
            echo '<option>' . $row["nombre"] . '</option>';
          }
          echo '</select>';
        ?>
        
        <p>Apellido</p>
        <input class="input-text" type="text" name="apellido1"><br><br>
        <input class="submit" type="submit" value="Actualizar">
      </form>
  <?php
    } else {
      // Recibimos los datos del formulario
      $nombre = $_POST["nombre"];
      $apellido = $_POST["apellido1"];
     

      // Montamos la sentencia SQL
      $sql = "update calendario set apellido='$apellido' Where nombre='$nombre' ";

      // Ejecutamos la sentencia de actualización
      if($conn->query($sql)) {
        echo '<p>Cliente actualizado con éxito</p>';
      } else {
        echo '<p>Hubo un error al actualizar el cliente: ' . $conn->error . '</p>';
      }
    }
    $conn->close();
  ?>
  <p>
    <a href="index_actualizarCal.php">Actualizar otro registro</a>
  </p>
  <p>
    <a href="index_noseCal.php">Listar</a>
  </p>
  </center>

</body>
</html>
