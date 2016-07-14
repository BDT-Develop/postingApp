<?php
include("php/header.php");
include_once("php/dbCredentials.php");
 ?>

 <?php
if (isset($_POST["username"]) && isset($_POST["email"])) {
  $nombre=$_POST["firstname"];
  $apellido=$_POST["lastname"];
  $usuario=$_POST["username"];
  $email=$_POST["email"];
  $contr=$_POST["password"];

  // Conexion
  $conn = new mysqli(NOMBRE_HOST, USUARIO, CONTRASENA, BASE_DE_DATOS);
  // Prueba a conexion
  if ($conn->connect_error) {
      die("Error de conexion: " . $conn->connect_error);
  }

  $sql = "INSERT INTO usuarios (nombre, apellido, username, correoElectronico, contrasenia)
  VALUES ('$nombre', '$apellido', '$usuario', '$email', '$contr')";

  if ($conn->query($sql) === TRUE) {
      echo "Registro Exitoso";
      $_SESSION["user"] =  $_POST["username"];
  } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();

}
else {
}
  ?>
  <div class="" id="regDiv">

    <form class="" action="reg.php" method="post">
      <input type="text" name="firstname" value="" placeholder="Nombre">

      <input type="text" name="lastname" value="" placeholder="Apellido">

      <input type="text" name="username" value="" placeholder="Nombre de Usuario">

      <input type="text" name="email" value="" placeholder="Corre Electronico">

      <input type="password" name="password" value="" placeholder="Contraseña">

      <input type="submit" name="btnIn" value="Ingresar">

      <a href="login.php">Ya tengo cuenta</a>
    </form>

  </div><!--regDiv-->



 <?php
include("php/footer.php");
  ?>
