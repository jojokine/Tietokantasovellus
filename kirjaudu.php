<?php require_once('navi.php'); ?>

<div id="kirjaudu" style="background-color:#FFFFFF;height:100px;width:600px;text-align:center;">
<form method="POST" action="kirjautuja.php">
  <fieldset>
    <legend>Kirjaudu sisään</legend>
    Käyttäjätunnus: <input type="text" name="tunnus" id="tunnus" /> <br />
    Salasana: <input type="password" name="salasana" id="salasana" /> <br />
    <input type="submit" value="Kirjaudu" />
  </fieldset>
</form>
</div>

<div id="rekisteröidy" style="background-color:#FFFFFF;height:300px;width:600px;text-align:center;">
<h3>Etkö ole rekisteröitynyt?<h3>
<FORM METHOD="LINK" ACTION="rekisteroidy.php">
<INPUT TYPE="submit" VALUE="Rekisteröidy käyttäjäksi tästä!">
</FORM>
</div>

</body>
</html>
