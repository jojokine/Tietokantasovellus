<?php require_once('navi.php');
require('onkoKirjauduttu.php'); 
if($kayttaja->nayta){
$napinTila = "checked=";
}
?>
<h2>Tervetuloa online satamakirjaan!<h2>

<div id="lisaa" style="background-color:#FFFFFF;height:20px;width:600px;float:left;">
<FORM METHOD="LINK" ACTION="lisays.php">
<INPUT TYPE="submit" VALUE="Lisää uusi satama">
</FORM>
</div>
<br />


<div id="tiedot" style="background-color:#FFFFFF;height:300px;width:700px;float:left;">
<h5>Omat tiedot <h5>
<legend>Voit päivittää tietojasi kirjoittamalla tiedon kenttään ja tallentamalla tiedot</legend>
<br />
<form method="POST" action="paivitaOmat.php">
Nimi: <input type="text" name="nimi" VALUE="<?php echo $kayttaja->nimi; ?>" /> <br />
Veneen tyyppi: <input type="text" name="veneentyyppi" VALUE="<?php echo $kayttaja->veneentyyppi; ?>" /> <br />
Veneen nimi: <input type="text" name="veneennimi" VALUE="<?php echo $kayttaja->veneennimi; ?>" /> <br />
Veneen pituus: <input type="text" name="veneenpituus" VALUE="<?php echo $kayttaja->veneenpituus; ?>" /> <br />
Veneeen syväys: <input type="text" name="veneensyvays" VALUE="<?php echo $kayttaja->veneensyvays; ?>" /> <br />
Sähköpostiosoite: <input type="text" name="email" VALUE="<?php echo $kayttaja->email; ?>" /> <br />
<br />
<input type="checkbox" <?php echo $napinTila;?> name="nayta" value="Tiedot" /> Näytä tiedot muille käyttäjille<br />
<br />
<input type="submit" value="Tallenna tiedot" /> 
</form> </p>
</div>
</body>
</html>
