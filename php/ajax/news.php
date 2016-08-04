<?php
include('../sql/dbCredentials.php');
session_start();
$conn = new mysqli(NOMBRE_HOST, USUARIO, CONTRASENA, BASE_DE_DATOS);
// prueba
if ($conn->connect_error) {
    die('Error de conexion: ' . $conn->connect_error);
}

//session variables
$idUsuario = $_POST['idUsuario'];
$username = $_POST['user'];
//array userdata
$paramUser = array( 'idUsuario' => $idUsuario ,
                    'username' => $username );

$sql = queryNews($paramUser);

$result = $conn->query($sql);

/*array result inconsistent
$arrayResult = array( 'idPost' => '' ,
                      'idUsuario'=> '' ,
                      'titulo'=> '' ,
                      'mensaje'=> '' ,
                      'estadoPost'=> '' );
*/
if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      echo "

      <h2>".$_SESSION['user']."</h2>
        <div class='contPost'>
          <div class='singPost'>
            <form class='active' >
              <input id='".$row['idPost']."' type='textbox' name='name' value='' readonly='true'>
              <input id='".$row['titulo']."' type='textbox' name='name' value='' readonly='true' readonly='true'>
              <input id='".$row['mensaje']."' type='textbox' name='name' value='' readonly='true' readonly='true'>
              <input id='".$row['estadoPost']."' type='textbox' name='name' value='' readonly='true' readonly='true'>
            </form>
          </div>
        </div>";
        var_dump($result);

    }
      header("Location: index.php");
} else {
    echo '0 results';
}
$conn->close();


 ?>
