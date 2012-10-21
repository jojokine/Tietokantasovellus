<?php require_once('navi.php');
require('onkoKirjauduttu.php'); 
if($kayttaja->nayta){
$napinTila = "checked=";
}
?>

<div id="tiedot" style="background-color:#FFFFFF;height:300px;width:700px;float:left;">
<h3>Omat tiedot <h3>
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
<form method="POST" action="vaihdaSalasana.php">
	<input type="submit" value="Vaihda salasana" >
</form>

<a href="poistaKayttaja.php?kayttajaid=<?php echo $kayttaja->kayttajaid?>">Poista käyttäjätili</a>


</div>
</body>
</html>
