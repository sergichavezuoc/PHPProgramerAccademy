<?php
include("cabecera.php");
?>

<div class="caja">
  <form id="login" action="validar.php" method="post">
  <div class="header">
    <h2>Acceder al sistema</h2>
  </div>
  <div class="sep"></div>
  <div class="inputs">
<input placeholder="Identificador" id="login" name="login" type="text"  value="" required />
<input placeholder="Contraseña" type="text" id="password" name="password"  value=""  required />
Usuario: <input checked="checked" type=radio name="tipo" value="usuario" /> Administrador <input type=radio name="tipo" value="administrador" />
<button type="submit" id="submit">Validar</button>
</div>
<div id="formFooter">
      <a class="underlineHover" href="#">Solicitar alta</a>
    </div>
</form>
</div>
<body>
    </html>