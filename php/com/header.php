<?php
session_start();
  if (isset($_SESSION["user"])) {
    $user=$_SESSION["user"];
    $nav="
        <li><a href='account.php' id='linkuser'><i class='fa fa-user' aria-hidden='true'></i> $user </a></li>
    ";
  }
  else {
    $user="Invitado";
    $nav = "
      <li><a href='reg.php' id='linkuser'><i class='fa fa-sign-in' aria-hidden='true'></i> Sign In </a></li>
    ";
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/ico" href="res/favicon.ico" />
        <link rel="stylesheet" type="text/css" href="css/style.css">
        <link rel="stylesheet" href="res/font-awesome/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.0/themes/base/jquery-ui.css">
        <script src="https://code.jquery.com/ui/1.12.0/jquery-ui.js"></script>
    <title>TestOne</title>
  </head>
  <body>

    <div id=navbar>
      <ul>
        <li><a href="index.php" class="active" id='linkhome'><i class="fa fa-home" aria-hidden="true"></i> Home </a></li>
        <li><a href="news.php" id='linknews'><i class="fa fa-newspaper-o" aria-hidden="true"></i> News </a></li>
        <?php echo $nav ?>

      </ul>

    </div><!--navbar-->
