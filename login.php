<?php
include("php/header.php");
include_once("php/dbCredentials.php");
?>

<?php
if(isset($_POST["email"])){

    $email = $_POST["email"];
    $password = $_POST["password"];
      // Crear conexion
    $conn = new mysqli(NOMBRE_HOST, USUARIO, CONTRASENA, BASE_DE_DATOS);
    // prueba
    if ($conn->connect_error) {
        die("Error de conexion: " . $conn->connect_error);
    }

    $sql = "SELECT username, nombre, apellido, correoElectronico  FROM usuarios WHERE correoElectronico = '$email' AND contrasenia = '$password' ";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while($row = $result->fetch_assoc()) {
          $_SESSION["user"] =  $row["username"];
        }
          header("Location: index.php");
    } else {
        echo "0 results";
    }
    $conn->close();

}else {

}
 ?>

<div id="logInForm" class="formi" action="login.php" method="post">
  <form class="" action="login.php" method="post">
    <input type="text" name="email" value="" placeholder="eMail">

    <input type="password" name="password" value="" placeholder="Contraseña">

    <input type="submit" name="btnIn" value="Ingresar">

    <a href="reg.php">Registrarse en el sistema</a>
  </form>

</div><!--logInForm-->


<?php
include("php/footer.php");
?>
