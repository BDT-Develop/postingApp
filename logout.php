<?php
include("php/com/header.php");
 ?>

<?php
unset($_SESSION["user"]);
unset($_SESSION["email"]);
header("Location: index.php");
 ?>
 <script type="text/javascript">
 $( "#linkhome" ).removeClass( "active" );
 $( "#linkuser" ).addClass( "active" );
 </script>
 <?php
include("php/com/footer.php");
  ?>
