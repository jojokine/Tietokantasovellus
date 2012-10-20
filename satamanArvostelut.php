<?php 
  include("yhteys.php");

  $haku = $_GET['satama'];
       
  $kysely = $yhteys->prepare("SELECT * FROM satama WHERE kayntisatamanumero = ?");
  $kysely->execute(array($haku));
  $satama = $kysely->fetch();
?>
<?php require_once('navi.php'); ?>



<div id="satama" style="background-color:#FFFFFF;height:600px;width:1200px;">
<h3>Sataman saamat arviot:<h3>
 

</div>
</body>
</html>
