<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">
<HTML>
  <HEAD>
    <TITLE>Un documento con una hoja de estilo externa</TITLE>
    <LINK href="css/estilo.css" rel="stylesheet" type="text/css">
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  </HEAD>
  <BODY>

  <?php
  if ($_POST["entrando"]=="s"){
    $db = new mysqli('localhost', 'horarios_escolares', 'horarios_escolares', 'horarios_escolares');

if ($db->connect_error) {
        die('Connect Error (' . $db->connect_errno . ') '
            . $mysqli->connect_error);
} elseif{
 // $sentencia="INSERT INTO courses ('name', 'description', 'date_start', 'date_end', 'active') VALUES ('".$_POST["name"]."', '".$_POST["description"]."', '".$_POST["date_start"]."', '".$_POST["date_end"]."', '".$_POST["active"]."') ";
  //echo $sentencia;
 // $result = $db->query($sentencia);
  }}
  ?>

<!------ Include the above in your HEAD tag ---------->

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    
    <!-- Login Form -->
    <form name="login" action="nuevo_curso.php" method="post">
      <input type="hidden" name="entrando" value="s">
      <input type="text" id="name" class="fadeIn second" name="name" placeholder="nombre del curso">
      <input type="text" id="description" class="fadeIn third" name="description" placeholder="descripcion del curso">
      <input type="text" id="date_start" class="fadeIn second" name="date_start" placeholder="fecha de inicio">
      <input type="text" id="date_end" class="fadeIn third" name="date_end" placeholder="fecha de fin">
      <input type="text" id="active" class="fadeIn third" name="active" placeholder="activo">
      <input type="submit" class="fadeIn fourth" value="Añadir curso">
    </form>


  </div>
</div>
<body>
    </html>