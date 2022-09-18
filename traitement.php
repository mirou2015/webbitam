<?php

include"connexion.php";
echo"nnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnn";
$req="insert into  user( login ,password ,nom ,prenom)values('$user','$password','$nom','$prenom')";

$ex=mysql_query($req);
header("location:index.php?page=accueil");
//header("index.php?page=mise_aj_chmambre.php");


?>