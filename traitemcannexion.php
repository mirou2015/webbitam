<?php
include"connexion.php";

$req="select * from user where login='$lg' and password='$ps'";
$ex=mysql_query($req);
if(mysql_fetch_array($ex)){
header("location:index.php?page=administrateur");

}else{

header("location:index.php?page=admin&a=1");


}



?>