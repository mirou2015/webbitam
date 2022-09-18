<?php

include"connexion.php";

$req="insert into  client( nom,prenom ,num_tel,nbr_adlt,nbr_enf,nbr_nuit ,nbr_lit,date_arriv,etat_chambr)values('$nom','$prenom','$tel','$nbr_adult','$nbr_enf',
'$nbr_nui', '$nbr_lit', '$date_arriv',1)";

$ex=mysql_query($req);
$id = mysql_insert_id();
//header("location:index.php?page=accueil");
//header("index.php?page=chmambre");
echo"<br/>";
echo"<center><b>votre réservation a bien été confirmée</b></center> ";
$exist="update tb_chambre set etat_chambre=1 where nb_lit='$nbr_lit' ";
$exec=mysql_query($exist);

////////////////////////////////////////////////////////////////////////////////////////////////////////////
header("location:index.php?page=affich_client");