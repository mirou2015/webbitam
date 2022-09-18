
<script language="javascript"> 
	function confirme( identifiant ) 
	{ 
		var confirmation = confirm( "Voulez vous vraiment supprimer cet enregistrement ?" ) ; 
		if( confirmation ) 
			{ 
			document.location.href = "type_action.php?sup_chamb="+identifiant ; 
			}
			else {
alert('suppression annulée'); 
document.location=identifiant;
} 
	} 
</script>


<h2 align="center">supprission une chambre</h2>
<table align="center" border=1  width="50%"bordercolor="#FFFFFF" cellpadding="0" cellspacing="0" style="background-color:#FFFFFF">
 <tr   align="center" bgcolor="#999999" >
<td width="5%"><font color="#FFFFFF" size='2'><b>numéro de chambre</b></font></td>
<td width="5%"><font size='2' color="#FFFFFF" ><b>nombre de lits</b></font></td>
<td width="5%"><font size='2' color="#FFFFFF" ><b>etat de chambre</b></font></td>

<?php
include"connexion.php";
$req2="select * from tb_chambre ";
$ex2=mysql_query($req2);


while($tab=mysql_fetch_array($ex2)){

echo"<tr>
<td align='center'width='35%'bgcolor='#CCCCCC' ><font  color='#333333' size='1'><b>$tab[0]</b></font></td>
<td align='center' width='35%'bgcolor='#CCCCCC'><font color='#000000' size='1'><b>$tab[1]</b></font></td>
<td align='center' width='35%'bgcolor='#CCCCCC'><font color='#000000' size='1'><b>$tab[2]</b></font></td>
</tr>";


}

?>
<?php

echo"</table>";
?>
<?php
if (!$valider){
?>

<form action="sup_chamb.php" method="get" >
<center><b>choisir un numero de chambre </b> <select  name="id_cham" onChange="bb();"   ></center>
<? $req="select * from tb_chambre  ";
$ereq=mysql_query($req);

while ($resu=mysql_fetch_array($ereq)){ 
echo "<option>$resu[0]</option>";
 

}
?>

</select>
<input type="submit" name="valider" value="supprimer" " />
</form>

<?php

} else{

$exist="delete from  tb_chambre  where id_chamb=$id_cham ";
$exec=mysql_query($exist);
echo"hgggggggggggggggggggggg";
//header("sup_chamb.php");
header("location:index.php?page=sup_chamb");
}

?>


