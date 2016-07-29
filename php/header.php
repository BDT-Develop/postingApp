<?php
session_start();
  if (isset($_SESSION["user"])) {
    $user=$_SESSION["user"];
    $nav="
        <li><a href='account.php'><i class='fa fa-user' aria-hidden='true'></i> $user </a></li>
    ";
  }
  else {
    $user="Invitado";
    $nav = "
      <li><a href='reg.php'><i class='fa fa-sign-in' aria-hidden='true'></i> Sign In </a></li>
    ";
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="res/font-awesome/css/font-awesome.min.css">
    <title>TestOne</title>
  </head>
  <body>

    <div id=navbar>
      <ul>
        <li><a href="index.php" class="active"><i class="fa fa-home" aria-hidden="true"></i> Home </a></li>
        <li><a href="news.php"><i class="fa fa-newspaper-o" aria-hidden="true"></i> News </a></li>
        <?php echo $nav ?>

      </ul>

    </div><!--navbar-->
