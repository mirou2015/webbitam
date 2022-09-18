<h2 align="center">supprission un client</h2>
<table align="center" border=1  width="50%"bordercolor="#FFFFFF" cellpadding="0" cellspacing="0" style="background-color:#FFFFFF">
 <tr   align="center" bgcolor="#999999" >
<td width="5%"><font color="#FFFFFF" size='2'><b>numéro de client</b></font></td>
<td width="5%"><font size='2' color="#FFFFFF" ><b>Nom</b></font></td>
<td width="5%"><font size='2' color="#FFFFFF" ><b>Prenom</b></font></td>
<td width="5%"><font color="#FFFFFF" size='2'><b>num de telephone</b></font></td>
<td width="5%"><font size='2' color="#FFFFFF" ><b>nombre de lits</b></font></td>

<?php
include"connexion.php";
$req2="select * from client ";
$ex2=mysql_query($req2);


while($tab=mysql_fetch_array($ex2)){

echo"<tr>
<td align='center'width='35%'bgcolor='#CCCCCC' ><font  color='#333333' size='1'><b>$tab[0]</b></font></td>
<td align='center' width='35%'bgcolor='#CCCCCC'><font color='#000000' size='1'><b>$tab[1]</b></font></td>
<td align='center' width='35%'bgcolor='#CCCCCC'><font color='#000000' size='1'><b>$tab[2]</b></font></td>
<td align='center'width='35%'bgcolor='#CCCCCC' ><font  color='#333333' size='1'><b>$tab[3]</b></font></td>
<td align='center' width='35%'bgcolor='#CCCCCC'><font color='#000000' size='1'><b>$tab[4]</b></font></td>

</tr>";


}

?>
<?php

echo"</table>";
?>
<?php
if (!$valider){
?>

<form action="sup_client.php" method="get" >
<center><b>choisir un numero de client </b> <select  name="id_client" onChange="bb();"   ></center>
<? $req="select * from client   ";
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

$exist="delete from  client   where num_client=$id_client ";
$exec=mysql_query($exist);
echo"hgggggggggggggggggggggg";
//header("sup_chamb.php");
header("location:index.php?page=sup_client");
}

?>



