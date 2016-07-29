<?php
include("php/com/header.php");
include_once("php/sql/dbCredentials.php");
 ?>

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
          $username= $row["username"];
          $nombreCompleto=$row["nombre"]." ".$row["apellido"];
          $email=$row["correoElectronico"];
      }
  } else {
      echo "0 results";
  }
  $conn->close();

 ?>

 <div class="formi" id= "formInfo">
   <form class="" action="" method="">
     <input readonly type="text" name="username" <?php echo " value='Usuario: ".$username."'"; ?>>

     <input readonly type="text" name="nombreCompleto" <?php echo " value='Nombre Completo: ".$nombreCompleto."'"; ?>>

     <input readonly type="text" name="correoElectronico" <?php echo " value='Email: ".$email."'"; ?>>

    <a href="logout.php">Salir</a>
  </form>
</div> <!--customerData>-->
<script type="text/javascript">
$( "#linkhome" ).removeClass( "active" );
$( "#linkuser" ).addClass( "active" );
</script>

 <?php
include("php/com/footer.php");
  ?>
