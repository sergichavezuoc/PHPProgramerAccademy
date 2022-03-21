<?php
//include("cabecera.php");
//include("menu.php");
session_start();
$db = new mysqli('localhost', 'horarios_escolares', 'horarios_escolares', 'horarios_escolares');

if ($db->connect_error) {
        die('Connect Error (' . $db->connect_errno . ') '
            . $mysqli->connect_error);
} else {
        if (isset($_POST["tipo"]) AND $_POST["tipo"]=="usuario"){$sentencia="SELECT username, password FROM users_admin WHERE username='".$_POST["login"]."'";}
        elseif (isset($_POST["tipo"]) AND $_POST["tipo"]=="administrador"){$sentencia="SELECT username, password FROM users_admin WHERE username='".$_POST["login"]."'";}
        else {"No se han recibido parámetros correctos para la validación";exit;};
        $result = $db->query($sentencia);
        $row = $result->fetch_all(MYSQLI_ASSOC);
        if ($db->affected_rows==1)
        {
            if ($row[0]["password"]==$_POST["password"])
                {
                    if ($_POST["tipo"]="usuario"){$_SESSION["usuario"]=$row[0]["username"];$_SESSION["nivel"]=3;$destino="usuario.php";};
                    if ($_POST["tipo"]="administrador"){$_SESSION["usuario"]=$row[0]["username"];$_SESSION["nivel"]=9;$destino="gestion.php";};
                }
            else{echo "Lo sentimos, contraseña incorrecta.";exit;}
        } 
        
        else {echo "Usuario no localizado. Puede darse de alta como usuario en ....";exit;}
        
}
header('Location: '.$destino);
//echo "<h2>Bienvenido al sistema usuario ".$row[0]["username"]."!!</h2>";
?>