

<!DOCTYPE html>
<meta http-equiv="content-type" content="text/html;charset=utf-8"/>
<html>
<head>
<style type="text/css">



ul
{
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;
}
li
{
float:left;
}
a:link,a:visited
{
display:block;
width:300px;
height:20px;
font-weight:bold;
font-size:18px;
color:#FFFFFF;
background-color:#000099;
text-align:center;
padding:7px;
text-decoration:none;
text-transform:uppercase;
}
a:hover,a:active

</style>
</head>

<body>
<ul>
<li><a href="etusivu.php">Etusivulle</a></li>
<li><a href="lisays.php">Lisäys</a></li>
<li><a href="omasivu.php">Oma Sivu</a></li>
<li><a href="kirjaudu.php">Kirjaudu ulos / sisään</a></li>
<li><div id="etsi" style="background-color:#000099;height:30px;font-weight:bold;font-size:18px;color:#FFFFFF;">
 <form name="search" method="post" action="hakutulokset.php">
 Etsi Satamaa: <input type="text" name="find" /> 
 <Select NAME="field">
 <Option VALUE="nimi">Nimellä</option>
 <Option VALUE="käyntisatamanumero">Käyntisatamanumerolla</option>
 <Option VALUE="karttasivu">Karttalehdeltä</option>
 </Select>
  <input type="submit" name="search" value="Hae" />
 </form>
</ul>

<h1>Elektroninen Satamakirja</h1>

</body>
</html>
