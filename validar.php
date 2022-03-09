<?php
include("cabecera.php");
include("menu.php");
$validado=false;
$db = new mysqli('localhost', 'horarios_escolares', 'horarios_escolares', 'horarios_escolares');

if ($db->connect_error) {
        die('Connect Error (' . $db->connect_errno . ') '
            . $mysqli->connect_error);
} elseif ($result = $db->query("SELECT username, password FROM users_admin WHERE username='".$_POST["login"]."'")) {
        $row = $result->fetch_all(MYSQLI_ASSOC);
        if ($db->affected_rows==1)
        {
           
            echo "Password: ".$row[0]["password"];
            if ($row[0]["password"]==$_POST["password"]){$validado =true;}
            else{echo "Lo sentimos, contraseña incorrecta.";exit;}
        } 
        
        else {echo "Usuario no localizado";exit;}
        
}
echo "<h2>Bienvenido al sistema usuario ".$row[0]["username"]."!!</h2>";
?>