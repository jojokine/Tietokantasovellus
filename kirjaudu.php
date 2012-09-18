

<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<html>
<head>
<?php require_once('navi.php'); ?>

<div id="kirjaudu" style="background-color:#FFFFFF;height:300px;width:600px;float:left;text-align:center;">
<form action="kirjautuja.php?" method="POST">
  <fieldset>
    <legend>Kirjaudu sisään</legend>
    <label for="tunnus">Käyttäjätunnus:</label>
    <input type="text" name="tunnus" id="tunnus" />
    <label for="salasana">Salasana:</label>
    <input type="password" name="salasana" id="salasana" />
    <input type="submit" value="Kirjaudu" />
  </fieldset>
</form>
</div>

<div id="rekisteröidy" style="background-color:#FFFFFF;height:300px;width:600px;float:left;text-align:center;">
<h3>Etkö ole rekisteröitynyt?<h3>
<button type="button">Rekisteröidy käyttäjäksi tästä!</button> <br />
</div>

</body>
</html>
