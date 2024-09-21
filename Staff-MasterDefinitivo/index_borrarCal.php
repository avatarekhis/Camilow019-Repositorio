<!DOCTYPE html>
<html lang="es">

<head>
  <title>Borrar registros de la base de datos</title>
  <link rel="stylesheet" href="styleCalAtu.css">
</head>
<body>

<center id="container">
  <h1>Borrar un registro</h1>
  <br>
  <?php
    include "index_conex.php";
    if(! $_POST) {
  ?>
      <form class="form" method="POST" action="index_borrarCal.php">
        <p>Nombre:</p><br>
        <?php
          //Creamos la sentencia SQL y la ejecutamos
          $sql="select nombre from calendario order by nombre";
          $result = $conn->query($sql);
        
          echo '<select name="nombre">';
          //Mostramos los registros en forma de menú desplegable
          while ($row = $result->fetch_array()) {
            echo '<option>'.$row["nombre"];
          }
          $result->free_result();
        ?>
        </select>
        <br><br>
        <input class="submit" type="submit" value="Borrar">
      </form>
  <?php
    } else {
      // Recibimos los datos del formulario
      $nombre = $_POST["nombre"];

      //Creamos la sentencia SQL
      $sql = "delete from calendario where nombre='$nombre'";

      // Ejecutamos la sentencia de borrado
      if($conn->query($sql)) {
        echo '<p>Contacto borrado con éxito</p>';
      } else {
        echo '<p>Hubo un error al borrar el contaco: ' . $conn->error . '</p>';
      }
    }
    $conn->close();
  ?>
  <p>
  </p>
  <p>
    <a href="index_noseCal.php">Listar</a>
  </p>
</center>

</body>
</html>