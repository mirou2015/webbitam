
<?php
include"connexion.php";

function saisi(){
$exist="select * from tb_chambre where id_chamb='$id_cham' ";
$exist1=mysql_query($exist);
if(mysql_fetch_array($exist1)){echo"se code exist déja";}}

if (!$valider){





?>

<SCRIPT language="JavaScript1.2"><!--
function champvide(ajout){
 if (ajout.id_cham.value==""){
   alert("LE CHAMP NE PEUT PAS ETRE VIDE")
   ajout.id_cham.focus()
   return(false)
   }
    if (ajout.nb_nli.value==""){
   alert("LE CHAMP NE PEUT PAS ETRE VIDE")
   ajout.nb_nli.focus()
   return(false)
   }
   }
</script>
   
   
<form  action="index.php?page=ajout_chamb" method="post" name="ajout"  onsubmit="return champvide(this)">
<fieldset style="margin-right:333px;">
<legend align="top"><b style=" color:#000000 ">ajouter chambre</b></legend>
<b>num chambre</b>   <input type="text" name="id_cham" onchange="saisi();"    /> 
<b>nombre de lit</b> <select name="nb_nli" >
<option>1</option>
<option>2</option>
<option>3</option>
<option >4</option>
</select>
<input type="submit" value="ajouter" name="valider"onclick="message();"  />
<input type="reset" value="annuler"/>

</fieldset>
</form>

<?php

}
else{
$exist="select * from tb_chambre where id_chamb='$id_cham' ";
$exist1=mysql_query($exist);
if(mysql_fetch_array($exist1)){ header( "location:index.php?page=ajout_chamb");
  echo"ce code déja existe";
  echo "<script language='Javascript'>

alert ('ce code déja existe' )

</script>";   
}
else{

$req="insert into  tb_chambre(id_chamb,nb_lit,etat_chambre) values('$id_cham','$nb_nli',0)";
$ex=mysql_query($req);

header("location:index.php?page=ajout_chamb");
}



}
?>

