<?php
/*Localhost credentials
define("NOMBRE_HOST","localhost");
define("BASE_DE_DATOS","testOne");
define("USUARIO","root");
define("CONTRASENA","mkt2016");
*/

/*Google Credentials*/
define("NOMBRE_HOST","107.178.209.115");
define("BASE_DE_DATOS","testOne");
define("USUARIO","root");
define("CONTRASENA","bdtsystems");

function queryNews($params){
  $idUsuario = $params['idUsuario'];
  $sql = "SELECT *
          FROM posts
          WHERE idUsuario = '$idUsuario';";
  return $sql;
}
