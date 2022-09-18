
<SCRIPT language="JavaScript1.2"><!--
function champvide(ajout){
 if (ajout.user.value==""){
   alert("LE CHAMP NE PEUT PAS ETRE VIDE")
   ajout.user.focus()
   return(false)
   }
    if (ajout.nom.value==""){
   alert("LE CHAMP NE PEUT PAS ETRE VIDE")
   ajout.nom.focus()
   return(false)
   }
   
     if (ajout.prenom.value==""){
   alert("LE CHAMP NE PEUT PAS ETRE VIDE")
   ajout.prenom.focus()
   return(false)
   }
   
     if (ajout.password.value==""){
   alert("LE CHAMP NE PEUT PAS ETRE VIDE")
   ajout.password.focus()
   return(false)
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

<div id="inscriptin">
<form action="traitement.php" method="post" name="ajout" onsubmit="return champvide(this)">
<fieldset>
<legend align="left"><b style="color:#000000">inscription</b></legend>
<b>user</b>  
<input type="text" name="user" style="margin-left:70px"/>
<br>
<br>
<b>Nom</b> 
<input type="text" name="nom" style="margin-left:70px" onkeypress="verifierCaracteres(event); return false;" />
<br>
<br>
<b>Prenom</b> <input type="text" name="prenom"style="margin-left:50px" onkeypress="verifierCaracteres(event); return false;"><br><br>

<b>Password</b> 
<input type="password" name="password" style="margin-left:35px" />
<br>
<br>


<input type="submit" value="valider" onclick="Test();">
<input type="reset" value="annuler" onclick="message();">
</fieldset>
</form>

</div>