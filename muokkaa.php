<?php require_once('navi.php');
require('onkoKirjauduttu.php'); 
  $muokattava = $_POST['satama'];
  $kysely = $yhteys->prepare("SELECT * FROM satama WHERE kayntisatamanumero = ?");
  $kysely->execute(array($muokattava));
  $satama = $kysely->fetchObject();
?>


<div id="tiedot" style="background-color:#FFFFFF;height:300px;width:700px;float:left;">
<h3>Sataman tiedot <h3>
<legend>Voit päivittää sataman tietoja täydentämällä tietokenttiä ja tallentamalla tiedot</legend>
<form method="POST" action="paivita.php">
<input type="hidden" name="kayntisatamanumero" value="<?php echo $satama->kayntisatamanumero; ?>" />
<input type="hidden" name="muokkaaja" VALUE="<?php echo $kayttaja->kayttajaid; ?>" /> <br />
Käyntisatamanumero: <?php echo $satama->kayntisatamanumero; ?> <br />
Sataman nimi: <input type="text" name="nimi" VALUE="<?php echo $satama->nimi; ?>" /> <br />
Karttalehti: <input type="text" name="karttasivu" VALUE="<?php echo $satama->karttasivu; ?>" /> <br />
Kiinnitystapa: <input type="text" name="kiinnitys" VALUE="<?php echo $satama->kiinnitys; ?>" /> <br />
Palvelut: <input type="text" name="palvelut" VALUE="<?php echo $satama->palvelut; ?>" /> <br />
Kotisivu: <input type="text" name="www" VALUE="<?php echo $satama->www; ?>" /> <br />
Sijainti(lat.): <input type="text" name="lat" /> <br />
Sijainti(lng.): <input type="text" name="lng" /> <br />
<br />
<input type="submit" value="Tallenna tiedot" /> 
</form> </p>
</div>
</body>
</html>
