 <?php
  include("cabecera.php");
  include("nivel.php");
    include("menu.php");
  if (isset($_POST["entrando"]) AND $_POST["entrando"]=="s"){
    $db = new mysqli('localhost', 'horarios_escolares', 'horarios_escolares', 'horarios_escolares');
    if ($db->connect_error) {die('Connect Error (' . $db->connect_errno . ') '. $mysqli->connect_error);} 
  else {
  $sentencia="INSERT INTO courses (name, description, date_start, date_end, active) VALUES ('".$_POST["name"]."', '".$_POST["description"]."', '".$_POST["date_start"]."', '".$_POST["date_end"]."', '".$_POST["active"]."') ";
  //echo $sentencia;
  $result = $db->query($sentencia);
  echo "Se ha registrado el curso ".$_POST["name"];
  exit;
  };
  };
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