
<html>
  <head>
   <title></title>
   <body>
<style type="text/css">
  img { position:absolute; float:inherit; margin-left:1em;   }
  
</style>

 

<?php
include"connexion.php";
$req="select * from tb_chambre   ";
$ereq=mysql_query($req);
?>


 <img src="image/12.jpg" id="img5" width="40%" height="25%"  />
<img src="image/15.jpg" id="img4" width="40%" height="25%"  />
<img  src="image/chambre-barbie.jpg" id="img3"  width="40%"  height="25%"/ >
<img  src="image/20170206193529(1).jpg" id="img2"  width="40%"  height="25%"/>
<img src="image/12.jpg" id="img1" width="40%" height="25%"/ >
<img src="image/11.jpg" id="img7" width="40%" height="25%" />

<script src="jquery-3.3.1.min.js"></script>
<script>

  
  
    $(function() {
    var i=0;
    affiche();

    function affiche() {
      i++;
      if (i==1) precedent = '#img7'
           else precedent = '#img' + (i-1);
      var actuel = '#img' + i;
      $(precedent).fadeOut(2000);
      $(actuel).fadeIn(2000);
      if (i==5) i=0;          
    }

    setInterval(affiche, 3000);
  });
</script>

<script language="Javascript">

/* Pour faire une vérification sans autoriser le point ("."), suivez les instructions qui sont écrites en commentaire */

function verif_nombre(champ)
{
var chiffres = new RegExp("[0-9\.]"); /* Modifier pour : var chiffres = new RegExp("[0-9]"); */
var verif;
var points = 0; /* Supprimer cette ligne */

for(x = 0; x < champ.value.length; x++)
{
verif = chiffres.test(champ.value.charAt(x));
if(champ.value.charAt(x) == "."){points++;} /* Supprimer cette ligne */
if(points > 1){verif = false; points = 1;} /* Supprimer cette ligne */
if(verif == false){champ.value = champ.value.substr(0,x) + champ.value.substr(x+1,champ.value.length-x+1); x--;}
}

}
</script>



<SCRIPT language="JavaScript1.2"><!--
function champvide(ajout){
 if (chamb.nom.value==""){
   alert("LE CHAMP NE PEUT PAS ETRE VIDE")
   chamb.nom.focus()
   return(false)
   }

   
     if (chamb.prenom.value==""){
   alert("LE CHAMP NE PEUT PAS ETRE VIDE")
 chamb.prenom.focus()
   return(false)
   }
   
      if (chamb.tel.value==""){
   alert("LE CHAMP NE PEUT PAS ETRE VIDE")
 chamb.tel.focus()
   return(false)
   }
   
   
    if (chamb.nbr_lit.value==""){
   alert("Il n'y a plus aucune chambre disponible dans les hôtels.")
 chamb.nbr_lit.focus()
   return(false)
   } 
   
   
   }
 
  
  
 function chiffres(event) {
// Compatibilité IE / Firefox
if(!event&&window.event) {
event=window.event;
}
// IE
if(event.keyCode < 48 || event.keyCode > 57 || event.keyCode  == 8 || event.keyCode == 127) {
event.returnValue = false;
event.cancelBubble = true;
}
// DOM
if(event.which < 48 || event.which > 57 || event.keyCode == 8 || event.keyCode == 127) {
event.preventDefault();
event.stopPropagation();
}
}
</script>
 <script  type="text/javascript">
     
function verifierCaracteres(event) {
	 		
	var keyCode = event.which ? event.which : event.keyCode;
	var touche = String.fromCharCode(keyCode);
			
	var champ = document.getElementById('mon_input');
			
	var caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			
	if(caracteres.indexOf(touche) >= 0) {
		champ.value += touche;
	}
			
}
 
</script>
<form action="index.php?page=confr_client" method="post" name="chamb" onSubmit="return champvide(this)">
<fieldset style=" margin-top:15em">
<legend align="left"><b style="color:#000000" >client</b> </legend>
<b>Nom </b> 
<input type="text" name="nom"  style="margin-left:110px" onKeyPress="verifierCaracteres(event); return false;" /> <br><br>
<b>Prenom</b> <input type="text" name="prenom"style="margin-left:90px" onKeyPress="verifierCaracteres(event); return false;"><br><br>
<b>numero de telephone</b> <input type="text" name="tel" style="margin-left:5px"   onkeyup="verif_nombre(this);" onkeypress="chiffres(event)"><br><br>
<b>nombre d'adulte</b> <input type="text" name="nbr_adult"onkeypress="chiffres(event)" style="margin-left:35px"onkeypress="chiffres(event " />
</fieldset>

<fieldset>
<legend align="left"><b  style="color:#000000">réservation</b> </legend>
<b> nombre de nuits:</b>
 <input type="text" name="nbr_nui"onkeypress="chiffres(event)" style="margin-left:30px"/> <br><br>
 <b>date d'arrive <input type="date" name="date_arriv"value="<?php echo ("Y-m-d");?>"  style="margin-left:55px"></b> <br><br>
 
<b>choisir un nombre de lit</b> <select name="nbr_lit" onChange="bb();"   >

<? $req="select * from tb_chambre where etat_chambre=0  ";
$ereq=mysql_query($req);

$i=0;
while ($resu=mysql_fetch_array($ereq)){ 
echo "<option>$resu[1]</option>";
 

}
?>

</select>
</fieldset>
<?php
$req="select * from tb_chambre where id_chamb='$id_chambr'";
$ex=mysql_query($req);
if($tab=mysql_fetch_array($ex)){

$co=$tab[1];

}?>					

  
 
 <input type="submit" value="valider"  name="valider" >
 <input type="reset" value="annuler" onClick="message();">

</fieldset>
<meta http-equiv="refresh" >
</form>



</body>
</head>
</html>

 