<?php
require_once('navi.php');
require('onkoKirjauduttu.php'); 
?>

<div id="salasana" style="background-color:#FFFFFF;height:300px;width:700px;float:left;">
<h3>Salasanan vaihtaminen <h3>
<br />
<form method="POST" action="salaVaihtaja.php">
Vanha salasana: <input type="password" name="vanhasala" /> <br />
Uusi salasana: <input type="password" name="salasana" /> <br />
Uusi salasana uudelleen: <input type="password" name="salasanaVarm" /> <br />
<input type="submit" value="Vaihda salasana" /> 
</form> </p>
</div>
</body>
</html>
