<h2 align="center">Mise à Jour Metier</h2>
<?php
include"connexion.php";
$req="select * from metier ";
$ex=mysql_query($req);
echo"<table border=1 width='100%'><tr><th>nom secteur</th><th>nom activite</th><th>code metier</th><th>nom metier</th><th colspan=2>action</th></tr>";

while($tab=mysql_fetch_array($ex)){

echo"<tr><td>$tab[1]</td><td>$tab[2]</td><td>$tab[3]</td><td>$tab[4]</td></tr>";


}

?>
<?php

echo"</table>";
?>
<div align="center"><a href="index.php?page=ajout_metier">Ajouter un metier</a> </div>