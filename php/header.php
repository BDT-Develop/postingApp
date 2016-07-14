<?php
session_start();
  if (isset($_SESSION["user"])) {
    $user=$_SESSION["user"];
    $nav="
        <li><a href='account.php'> $user </a></li>
    ";
  }
  else {
    $user="Invitado";
    $nav = "
      <li><a href='reg.php'>Sign In</a></li>
    ";
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>TestOne</title>
  </head>
  <body>

    <div id=navbar>
      <ul>
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="news.php">News</a></li>
        <?php echo $nav ?>

      </ul>

    </div><!--navbar-->
