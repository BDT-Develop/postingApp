<?php
include("php/header.php");
include_once("php/dbCredentials.php");
 ?>

<div class="" id= "customerData">
  <form class="" action="" method="">
<?php

  $user = $_SESSION["user"];
    // Crear conexion
  $conn = new mysqli(NOMBRE_HOST, USUARIO, CONTRASENA, BASE_DE_DATOS);
  // Check connection
  if ($conn->connect_error) {
      die("Error de conexion: " . $conn->connect_error);
  }

  $sql = "SELECT username, nombre, apellido, correoElectronico FROM usuarios WHERE username = '$user'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {
          echo "Username: " . $row["username"]. " - Nombre: " . $row["nombre"]. " " . $row["apellido"]. "<br> Correo Electronico: ".$row["correoElectronico"];
      }
  } else {
      echo "0 results";
  }
  $conn->close();

 ?>
    <a href="logout.php">Salir</a>
  </form>
</div> <!--customerData>


 <?php
include("php/footer.php");
  ?>
