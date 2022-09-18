<?php

include"connexion.php";



////////////////////////////////////////////////////////////////////////////////////////////////////////////
$req1="select * from client ORDER BY num_client DESC   ";
$ex1=mysql_query($req1);


$data=mysql_fetch_array($ex1);
echo"<br/><br/><center><b>votre réservation a bien été confirmée</b></center> ";
echo '<br/><br/><center><b>votre nom est : </b> '.$data['nom'];
echo '<br/><br/><b>votre prenom est : </b> '.$data['prenom'];
echo '<br/><br/><b>votre numero de telephone est  : </b>'.$data['num_tel'];
echo '<br/><br/><b>votre nombre de nuits est :</b>  '.$data['nbr_nuit'];
echo '<br/><br/><b>votre d ate arrive est  : </b> '.$data['date_arriv'];
?>
</center>
