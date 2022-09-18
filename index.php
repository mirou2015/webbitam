<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="stylesheet" type="text/css" href="../page_web/source/page.css" media="all"/>
<title>hotell</title>

<link rel="shortcut icon" href="http://monorom.com/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="start" media="all" href="../page_web/source/page.css"/>
<link rel="shortcut icon" href="http://monorom.com/favicon.ico" type="image/x-icon" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="../page_web/jqueryy/jquery-3.3.1.min.js" type="text/javascript"></script>

</head>

 
<body>
<SCRIPT language="JavaScript1.2"><!--
function champvide(ajout){
 if (ajout.lg.value==""){
   alert("LE CHAMP NE PEUT PAS ETRE VIDE")
   ajout.ps.focus()
   return(false)
   }
    if (ajout.ps.value==""){
   alert("LE CHAMP NE PEUT PAS ETRE VIDE")
   ajout.ps.focus()
   return(false)
   }
   }
</script>

<div id="entete"><img src="../page_web/image/im1.jpg"width:auto width="96%" height="105px" id="magetete" style=" margin-bottom:2em" />
</div>
 
<div id="main">

<div id="templatemo_menu">
<ul>
  <li><a href="../page_web/index.php">acceuil </a> </li>
  <li><a href="../page_web/index.php?page=chambre">reservation chambre</a></li>
  <li><a href="../page_web/index.php?page=restaurant">restaurant</a> </li>
   
  <li><a href="../page_web/index.php?page=reserv_tarif">tarif</a></li>
 
 
</ul>
</div>
     	
<div id="menu">
 
<fieldset>
<legend align="left"><b  style="color:#000000">admin</b></legend>
<?php 

if($a){ echo "<font color=red>erreur</font>";}
?>
<form action="../page_web/traitemcannexion.php" method="get" onsubmit="return champvide(this)">
<b>user</b><br />
<input type="text" name="lg" /><br />
<b>password</b><br />
<input type="password" name="ps" /><br /><br />
<input type="submit" name="ok" value="connexion" />
<input type="reset"  value="annuler"/>

</fieldset>

</form>
</div>


 <div id="contenu">

    <?php

  // On d?finit le tableau contenant les pages autoris?es
  // ----------------------------------------------------
  $pageOK = array('chambre' => 'chambre.php','restaurant' => 'restaurant.php','reserv_tarif' => 'reserv_tarif.php','administrateur' => 'administrateur.php','inscription' => 'inscription.php','ajout_chamb' => 'ajout_chamb.php',  
  'sup_chamb' => 'sup_chamb.php',  'cons_chamb' => 'cons_chamb.php',  'mod_chamb' => 'mod_chamb.php','cons_client' => 'cons_client.php',
  'sup_client' => 'sup_client.php','confr_client' => 'confr_client.php','affich_client' => 'affich_client.php'); 



  // On teste que le param?tre d'url existe et qu'il est bien autoris?
  // -----------------------------------------------------------------
 if ( (isset($_GET['page'])) && (isset($pageOK[$_GET['page']])) ) {
    include($pageOK[$_GET['page']]);   // Nous appelons le contenu central de la page
  } else {
    include('accueil.php');   // Page par d??faut quant elle n'existe pas dans le tableau
  }

?>
 


 </div>
 
 
</div>
</div>









<div id="pied">
<b style="color:#FFFFFF"> universite batna 2
</div>


 
</body>
</html>
