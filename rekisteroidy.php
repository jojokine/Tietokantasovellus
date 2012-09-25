<?php require_once('navi.php'); ?>

<div id="uusikayttaja" style="background-color:#FFFFFF;height:600px;width:600px;float:left;">
<h3>Syötä pydetyt tiedot! <h3>
<p>- Voit muokata ja lisätä muita tietoja oalla sivullasi rekisteröidyttyäsi!</p>
<form method="POST" action="rekisteroi.php">
Käyttäjänimi: <input type=text name="kayttajanimi" /><br>
Sähköpostiosoite: <input type=text name="sahkoposti" /><br>
Salasana: <input type=password name="salasana" /><br>
Salasana uudelleen: <input type=password name="salasanaVarm" /><br>
<input type="submit" value="Tallenna tiedot" />
</form> </p>
</div>

</body>
</html>
