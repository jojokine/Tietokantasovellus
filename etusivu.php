

<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<html>
<head>

<?php require_once('navi.php'); ?>

<h2>Tämä on Elektronisen Satamakirjan etusivu. Etsi satamaa yläpalkin hakutoiminnolla.<h2>
<?php
if(isset($_SESSION['id'])){
echo "";
}
else{?>
<h3>Rekisteröityneet käyttäjät voivat kirjautua sisään yläpalkin kirjaudu-linkistä <h3>

<div id="rekisteröidy" style="background-color:#FFFFFF;height:300px;width:600px;float:left;text-align:center;">
<h3>Etkö ole rekisteröitynyt?<h3>
<FORM METHOD="LINK" ACTION="rekisteroidy.php">
<INPUT TYPE="submit" VALUE="Rekisteröidy käyttäjäksi tästä!">
</FORM>
</div>
<?php
}?>






</body>
</html>

