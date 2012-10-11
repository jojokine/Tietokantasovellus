<?php require_once('navi.php');
require('onkoKirjauduttu.php'); 
?>

  <head>
    <title>Lisää uusi satama</title>
  </head>
  <body>
    <form action="lisaa.php" method="post">
      <p>Käyntisatamanumero: <br> <input type="text" name="kayntisatamanumero"></p>
      <p>Nimi: <br> <input type="text" name="nimi"></p>
      <p>Kiinnitystapa/tavat: <br> <input type="text" name="kiinnitys"></p>
      <p>Palvelut: <br> <input type="text" name="palvelut"></p>
      <p>Karttasivu: <br> <input type="text" name="karttasivu"></p>
      <p>WWW-sivu: <br> <input type="text" name="kotisivu"></p>   

      <p><input type="submit" value="Lisää"></p>
    </form>
  </body>
</html


