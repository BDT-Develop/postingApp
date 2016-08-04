<?php
include("php/com/header.php");
 ?>
<div class="formi">
  <form class="" >
    <input id="idUsuario" type="textbox" name="txtidUsuario" <?php echo "value='".$_SESSION['idUsuario']."'"; ?> readonly="true">
    <input id="username" type="textbox" name="txtusername" <?php echo "value='".$_SESSION['user']."'"; ?> readonly="true">
    <input id="btnRefresh" type="button" name="btnRefresh" value="Actualizar">
  </form>
</div>
<div id="resultset">

</div>

<div id="loading">
  <p>
    Cargando...
  </p>
</div>
<script type="text/javascript" src="js/news.js">

</script>
 <?php
include("php/com/footer.php");
  ?>
